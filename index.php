<?php

/**
 * @name Php Model View Controller
 * @link https://github.com/carlvallory/PMVC Github
 * @version 0.0.5
 * @License https://github.com/carlvallory/PMVC/blob/master/LICENSE Mozilla Public License 2.0
 * @author Carlos Vallory <carlvallory@gmail.com>
 **/

require_once 'autoload.php';
$libs = array();
$classs = array();
$configs = array();
/* Auto-Loader */
array_push($classs, 'Routes','Controller','Model','View','Modules');

/* Library */
array_push($classs, 'Hash','Database','Session');
//array_push($classs, 'Val', 'Form');
array_push($libs, 'functions');

/* Configs */
array_push($configs, 'config','paths','database','version');

loadClass($classs);
loadConfig($configs);
loadLib($libs);

require_once 'moduleloader.php';

$app = new Routes();


?>
