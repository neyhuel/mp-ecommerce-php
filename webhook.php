<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

//$json = $_POST; //json need to be data
//$info = json_encode($json);
$info = file_get_contents('php://input');
print_r($info);
error_log(print_r($info));
?>