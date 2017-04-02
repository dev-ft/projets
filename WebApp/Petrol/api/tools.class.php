<?php

class Tools {

    const INVALID_CP = 100;
    const INVALID_CP_MISSING = 101;
    const INVALID_TYPE = 110;
    const INVALID_TYPE_MISSING = 111;
    const INVALID_SORT = 120;
    const INVALID_SORT_MISSING = 121;

    public static function getStringErrorForCode($inCode) {
        switch ($inCode) {
            case Tools::INVALID_CP:
                return 'INVALID_CP';
            case Tools::INVALID_CP_MISSING:
                return 'INVALID_CP_MISSING';
            case Tools::INVALID_TYPE:
                return 'INVALID_TYPE';
            case Tools::INVALID_TYPE_MISSING:
                return 'INVALID_TYPE_MISSING';
            case Tools::INVALID_SORT:
                return 'INVALIDINVALID_SORT_CP';
            case Tools::INVALID_SORT_MISSING:
        }
        throw new Exception('Unknown error');
    }

// Pour connaître les valeurs des code postaux dans le terminal, suffit de taper ceic:
// cat PrixCarburants_quotidien_20161123.xml | grep '<pdv ' | sed -e 's\.*cp="\\g' | sed -e 's\".*\\g' | uniq | sort | sed -e 1b -e '$!d'
// min/Max: 01000/99999
    /**
     * Clean and return the zip code
     * @param string $inZipCode
     * @return string Formated Zip code on 5 characters
     * @throws Exception
     */
    public static function handleZipCode($inZipCode) {
        $code = filter_var($inZipCode, FILTER_SANITIZE_NUMBER_INT);
        if ($code >= 1000 && $code <= 99999) {
            return str_pad($code, 5, '0', STR_PAD_LEFT);
        }
        throw new Exception('Code postal invalide', Tools::INVALID_CP);
    }

    /**
     * Clean and return type of petrol
     * @param string $inType
     * @return string
     * @throws Exception
     */
    public static function handleTypeCode($inType) {
        $tmp = filter_var($inType, FILTER_SANITIZE_STRING);
        $tmp = trim(strtolower($tmp));
        if (strlen($tmp)) {
            /* Equivalent au switch
            if ($tmp == 'gasole' ||
                    $tmp == 'sp95' ||
                    $tmp == 'sp98' ||
                    $tmp == 'gpl' ||
                    $tmp == 'e10' ||
                    $tmp == 'e85') {
                return $tmp;
            } else {
                throw new Exception('Type de carburant invalide', Tools::INVALID_TYPE);
            }*/

            switch ($tmp) {
                case 'gazole':
                case 'sp95':
                case 'sp98':
                case 'gpl':
                case 'e10':
                case 'e85':
                    return $tmp;
                default:
                    throw new Exception('Type de carburant invalide', Tools::INVALID_TYPE);
            }
        }
        throw new Exception('Type de carburant manquant', Tools::INVALID_TYPE_MISSING);
    }

    /**
     * Clean and return sort order
     * @param type $inSort
     * @return integer PHP sort constant
     * @throws Exception
     */
    public static function handleSortCode($inSort) {
        $tmp = trim(strtolower(filter_var($inSort, FILTER_SANITIZE_STRING)));
        if (strlen($tmp)) {
            switch ($tmp) {
                case 'asc':
                    return SORT_ASC;
                case 'desc':
                    return SORT_DESC;

                default:
                    throw new Exception('Tri invalide', Tools::INVALID_SORT);
            }
        }
        return SORT_ASC;
    }

    public static function downloadData($inFolderPath = NULL) {
        date_default_timezone_set('Europe/Paris');
        // http://www.prix-carburants.gouv.fr/rubrique/opendata/

        $path = './data/';
        if (isset($inFolderPath)) {
            $path = $inFolderPath;
        }

        $fileName = date('Ymd', time() - (3600 * 24 * 7));
        $hour = date('H', time());
        if ($hour < 6) {
            $fileName = date('Ymd', time() - (3600 * 24 * 8));
        }

        if (!file_exists($path . "$fileName.xml")) {
            file_put_contents($path . "$fileName.zip", fopen("http://donnees.roulez-eco.fr/opendata/jour", 'r'));
            $zip = new ZipArchive();
            if ($zip->open($path . "$fileName.zip") === TRUE) {
                $zip->extractTo($path);
                $zip->close();
                rename($path . "PrixCarburants_quotidien_$fileName.xml", $path . "$fileName.xml");
                unlink($path . "$fileName.zip");
            }
        }

        return $path . "$fileName.xml";
    }

    // end of class
}
