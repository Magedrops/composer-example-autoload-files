<?php

//@SuppressWarnings(PHPMD)
//@codingStandardsIgnoreStart

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'vendor/autoload.php';

$app = MageDrops_App::create();
$app->run();

