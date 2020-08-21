<?php

require __DIR__ .  '/vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors',1);

//$json = $_POST; //json need to be data
//$info = json_encode($json);
$info = json_decode(file_get_contents('php://input'));
//error_log(print_r($info));
//file_put_contents("php://stderr", print_r($info));

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('name');
$log->pushHandler(new StreamHandler('php://stderr', Logger::WARNING));

$log->warning(json_encode($info));

?>