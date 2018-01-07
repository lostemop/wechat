<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
error_reporting(E_ALL);
ini_set('display_errors',1);

//require dirname(dirname(__DIR__)) . '/core/vendor/autoload.php';
//echo dirname(dirname(__DIR__)) . '/core/vendor/autoload.php';
require_once (dirname(dirname(__DIR__)) . '/core/vendor/autoload.php');

require dirname(dirname(__DIR__)) . '/core/vendor/yiisoft/yii2/Yii.php';

$config = dirname(__DIR__) . '/config/web.php';

(new yii\web\Application($config))->run();