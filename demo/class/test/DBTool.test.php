<?php
require_once '../DBTool.class.php';
echo '<pre>';
echo '<p>Test start</p>';

$test = new DBTool();
assert($test===null, 'Test failure, tool must exists.');

$connection = $test->getConnection();
assert($connection===null, 'Test failure, connection must exists.');

echo '<p>Test end</p>';
