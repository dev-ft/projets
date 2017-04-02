<?php
header("Access-Control-Allow-Origin: *");

require_once 'tools.class.php';

//////////////////////////////////////////////////////////////////////////////
//////////  main program
//////////////////////////////////////////////////////////////////////////////
//sleep(2);
$zipCode = $type = NULL;
$sort = SORT_ASC;
try {
    // Test all keys in the request
    foreach ($_REQUEST as $key => $value) {
        if (strcasecmp($key, 'cp') == 0) {
            $zipCode = Tools::handleZipCode($value);
        }
        if (strcasecmp($key, 'type') == 0) {
            $type = Tools::handleTypeCode($value);
        }
        if (strcasecmp($key, 'sort') == 0) {
            $sort = Tools::handleSortCode($value);
        }
    }

    // Handle cases where used=r gives nothing
    if ($zipCode == NULL) {
        showError('INVALID_CP_MISSING', 'Code postal manquant');
        exit(0);
    }
    if ($type == NULL) {
        showError('INVALID_TYPE', 'Carburant manquant');
        exit(0);
    }
} catch (Exception $exc) {
    // Display errors nicely in JSON
    switch ($exc->getCode()) {
        case Tools::INVALID_CP:
        case Tools:: INVALID_CP_MISSING:
        case Tools:: INVALID_TYPE:
        case Tools:: INVALID_TYPE_MISSING:
            showError(Tools::getStringErrorForCode($exc->getCode()), $exc->getMessage());
            exit(0);
            break;
        case Tools:: INVALID_SORT:
            showError(Tools::getStringErrorForCode($exc->getCode()), $exc->getMessage());
            exit(0);
            break;
        case Tools:: INVALID_SORT_MISSING:
            // not an error
            $sort = SORT_ASC;
            break;
    }
}


// Download the file only when it's needed
$xmlFile = Tools::downloadData();

// Display results
echo getStationsForZipCode($zipCode, $type, $sort, $xmlFile);

// End of program
exit(0);


//////////////////////////////////////////////////////////////////////////////
////////// Functions
//////////////////////////////////////////////////////////////////////////////

/**
 * Display a JSON formatted error
 * @param string $inCode Error code
 * @param type $inMessage Human Message
 */
function showError($inCode, $inMessage) {
    $err["status"] = $inCode;
    $err["results"] = array();
    $err['error_message'] = $inMessage;
    echo json_encode($err);
}

/**
 * Parse the XML file to find the stations
 * @param type $inZipCode
 * @param type $inFile
 * @return string JSON formatted
 */
function getStationsForZipCode($inZipCode, $inType, $inSort, $inFile) {
    if (!file_exists($inFile)) {
        showError('NO_DATA', 'Aucune données disponible.');
        return;
    }
    $xml = simplexml_load_file($inFile);

    $result = array();
    foreach ($xml->pdv as $pdv) {
        $theStation = null;
        $canShow = false;
        if ($pdv->attributes()->cp == $inZipCode) {

            $theStation['addr'] = ucfirst(strtolower($pdv->adresse)) . ", " . strval($pdv->attributes()->cp) . " " . ucfirst(strtolower(strval($pdv->ville)));
            foreach ($pdv->prix as $price) {

                $floatPrice = intval($price->attributes()->valeur) / 1000;
                if (0 === strcasecmp($price->attributes()->nom, $inType)) {
                    if ($floatPrice > 0) {
                        $canShow = true;
                        $theStation['price'] = str_replace('.', ',', sprintf('%.3f', $floatPrice));
                    }
                }
            }

            if ($canShow) {
                $result[] = $theStation;
            }
        }
    }

    if ($inSort == SORT_DESC) {
        usort($result, "sortByPriceDesc");
    } else {
        usort($result, "sortByPriceAsc");
    }
    return json_encode(array("status" => "OK", "results" => $result), JSON_PRETTY_PRINT);
}

/**
 * Sort our data array by prices ascending
 * @param array $a
 * @param array $b
 * @return integer The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.
 */
function sortByPriceAsc($a, $b) {
    return gvSort(floatval(str_replace(',','.',$a['price'])), floatval(str_replace(',','.',$b['price'])), SORT_ASC);
}

/**
 * Sort our data array by prices descending
 * @param array $a
 * @param array $b
 * @return integer The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.
 */
function sortByPriceDesc($a, $b) {
    return gvSort(floatval(str_replace(',','.',$a['price'])), floatval(str_replace(',','.',$b['price'])), SORT_DESC);
}

/**
 * Standard usort for two floats
 * @param type $inFloat1
 * @param type $inFloat2
 * @param type $inSortOrder
 * @return int
 */
function gvSort($inFloat1, $inFloat2, $inSortOrder) {
    if ($inFloat1 == $inFloat2) {
        return 0;
    }

    if ($inSortOrder == SORT_DESC) {
        return ($inFloat1 > $inFloat2) ? -1 : 1;
    }

    return ($inFloat1 < $inFloat2) ? -1 : 1;
}
