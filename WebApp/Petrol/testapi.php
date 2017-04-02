<?php


$ip = '127.0.0.1';
$apiPath = '/Petrol/api/';
$port = '8080';


$fullUrl = "http://$ip:" . $port . $apiPath;

try {
    echo $fullUrl . '<br>';
    echo "Test 0, Server answers<br>";
    $url = $fullUrl;
    $res = file_get_contents($url);
    if ($res == NULL || strlen($res) == 0) {
        echo "Failure " . __LINE__ . " Server does not answer<br>";
        die();
    }
    $data = json_decode($res, true);
    if ($data == NULL) {
        echo "Failure " . __LINE__ . " Invalid JSON<br>";
        var_dump($res);
        var_dump($data);
        die();
    }


    echo "OK<hr>Test 1, no argument<br>";
    $res = file_get_contents($fullUrl);
    $data = json_decode($res, true);
    testFields($data);

    echo "OK<hr>Test 2, Missing one mandatory arg<br>";
    $url = $fullUrl . '?cp=83300';
    echo $url . '<br>';
    $res = file_get_contents($url);
    $data = json_decode($res, true);
    testMissingArg($data);

    echo "OK<hr>Test 2.1, Missing one mandatory arg<br>";
    $url = $fullUrl . '?type=gazole';
    echo $url . '<br>';
    $res = file_get_contents($url);
    $data = json_decode($res, true);
    testMissingArg($data);

    echo "OK<hr>Test 3, Invalid Parameters CP Empty<br>";

    $url = $fullUrl . '?cp=&type=Sp95&sort=asc';
    echo $url . '<br>';
    $res = file_get_contents($url);
    $data = json_decode($res, true);
    testInvalidParams($data);

    echo "OK<hr>Test 3.1, Invalid Parameter Type empty<br>";
    $url = $fullUrl . '?cp=83300&type=&sort=asc';
    echo $url . '<br>';
    $res = file_get_contents($url);
    $data = json_decode($res, true);
    testInvalidParams($data);


    echo "OK<hr>Test 3.2, Invalid Parameter TYPE dummy<br>";
    $url = $fullUrl . '?cp=83300&type=toto&sort=asc';
    echo $url . '<br>';
    $res = file_get_contents($url);
    $data = json_decode($res, true);
    testInvalidParams($data);

    echo "OK<hr>Test 3.3, Invalid Parameter SORT dummy<br>";
    $url = $fullUrl . '?cp=83300&type=SP95&sort=dummy';
    echo $url . '<br>';
    $res = file_get_contents($url);
    $data = json_decode($res, true);
    testInvalidParams($data);

    echo "OK<hr>Test 4, Test sorting Desc<br>";
    $url = $fullUrl . '?cp=83300&type=gaZole&sort=desc';
    echo $url . '<br>';
    $res = file_get_contents($url);
    $data = json_decode($res, true);
    testSortOrder($data, 'desc');

    echo "OK<hr>Test 4.1, Test sorting ASC<br>";
    $url = $fullUrl . '?cp=83300&type=gaZole&sort=asc';
    echo $url . '<br>';
    $res = file_get_contents($url);
    $data = json_decode($res, true);
    testSortOrder($data, 'asc');

    echo "OK<hr>Test 4.2, Test sorting ASC case<br>";
    $url = $fullUrl . '?cp=83300&type=gaZole&sort=AsC';
    echo $url . '<br>';
    $res = file_get_contents($url);
    $data = json_decode($res, true);
    testSortOrder($data, 'asc');

    echo "OK<hr>Test 4.4, Test sorting no sort, must be asc<br>";
    $url = $fullUrl . '?cp=83300&type=gaZole';
    echo $url . '<br>';
    $res = file_get_contents($url);
    $data = json_decode($res, true);
    testSortOrder($data, 'asc');
    echo "OK";
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}

function testSortOrder($inData, $inOrder) {
    if (strcasecmp($inData["status"], 'OK') != 0) {
        echo "Failure " . __LINE__ . " must return OK...<br>";
        die();
    }

    if ($inOrder == 'desc') {

        for ($i = 1; $i < count($inData["results"]); $i++) {
            if ($inData["results"][$i - 1]['price'] < $inData["results"][$i]['price']) {
                echo "Failure " . __LINE__ . " Sort order not good DESC<br><pre>";
                print_r($inData);
                echo '<br>';
                die();
            }
        }
    } else if ($inOrder == 'asc') {

        for ($i = 1; $i < count($inData["results"]); $i++) {
            if ($inData["results"][$i - 1]['price']>$inData["results"][$i]['price']) {
                echo "Failure " . __LINE__ . " Sort order not good ASC<br><pre>";
                print_r($inData);
                echo '<br>';
                die();
            }
        }
    }
}

function testInvalidParams($inData) {
    if (strcasecmp($inData["status"], 'OK') == 0) {
        echo "Failure " . __LINE__ . " Error expected on invalid params<br>";
        die();
    }

    if (!isset($inData["error_message"]) || strlen($inData["error_message"]) == 0) {
        echo "Failure " . __LINE__ . " No error message.<br>";
        die();
    } else {
        echo "  ## Expected message : " . __LINE__ . " " . $inData["error_message"] . "<br>";
    }
}

/*
 * /?cp=83300&type=toto&sort=asc
 * Fails when one is missing
 */

function testMissingArg($inData) {
    if (strcasecmp($inData["status"], 'OK') == 0) {
        echo "Failure " . __LINE__ . " Error expected<br>";
        die();
    }

    if (!isset($inData["error_message"]) || strlen($inData["error_message"]) == 0) {
        echo "Failure " . __LINE__ . " No error message.<br>";
        die();
    } else {
        echo "  ## Expected message : " . __LINE__ . " " . $inData["error_message"] . "<br>";
    }
}

function testFields($inData) {
    if (!isset($inData["status"])) {
        echo "Failure " . __LINE__ . " no status define<br>";
        die();
    }

    if (!isset($inData["results"])) {
        echo "Failure " . __LINE__ . " no results define<br>";
        die();
    }

    if (strcasecmp($inData["status"], 'OK') != 0) {
        echo " ## Warning, status not OK: " . $inData["status"] . "<br>";
        if (!isset($inData["error_message"]) || strlen($inData["error_message"]) == 0) {
            echo "Failure " . __LINE__ . " No error message.<br>";
            die();
        } else {
            echo "  ->Expected message : " . __LINE__ . " " . $inData["error_message"] . "<br>";
        }
    }
}
