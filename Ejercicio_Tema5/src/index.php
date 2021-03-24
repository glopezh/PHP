<?php
error_reporting(-1);
ini_set("display_errors", "true");
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
require_once __DIR__ . '../../vendor/autoload.php';
$log = new Logger('name');
$log->pushHandler(new StreamHandler('your.log', Logger::WARNING));
// add record to the log
$log->addRecord(Logger::WARNING, 'Foo1');
$log->warning('Foo2');
$log->error('Boo');