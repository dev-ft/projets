<?php

require_once '../StringUtils.class.php';

echo "<pre>Test start\n";

$test = StringUtils::cleanName('JEAN - CLAUDE');
assert(0 == strcmp($test, 'Jean - Claude'), 'Test 1 failed: '.$test);

$test = StringUtils::cleanName('gilles Vayssié');
assert(0 == strcmp($test, 'Gilles Vayssié'), 'Test 2 failed: '.$test);

$test = StringUtils::cleanName(' gilles Vayssié ');
assert(0 == strcmp($test, 'Gilles Vayssié'), 'Test 3 failed: '.$test);

$test = StringUtils::cleanName("gIlles vAyssié\t");
assert(0 == strcmp($test, 'Gilles Vayssié'), 'Test 4 failed: '.$test);

//// Test mail 
$test = StringUtils::cleanMail("Jean-Claude@mode83.net", false);
assert(0 == strcmp($test, 'jean-claude@mode83.net'), 'Test 5 failed: '.$test);

$test = StringUtils::cleanMail("Jean-Claude@mode83.net", true);
assert(0 == strcmp($test, 'Jean-Claude@mode83.net'), 'Test 6 failed: '.$test);

$test = StringUtils::cleanMail("Jean-Claude at mode83.net", false);
assert(NULL === $test, 'Test 6 failed: '.$test);

$test = StringUtils::cleanMail("Jean-Claude at mode83.net", true);
assert(NULL === $test, 'Test 6 failed: '.$test);

echo "\nTest end\n";
