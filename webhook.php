<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

//$json = $_POST; //json need to be data
//$info = json_encode($json);
$info = json_decode(file_get_contents('php://input'), true);
print_r($info);
$file = fopen('test.json','w+') or die("File not found");
fwrite($file, $info);
fclose($file);
exit;

?>