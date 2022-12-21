<?php

ini_set('default_charset','UTF-8');

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

define('DIR', 'https://'.$_SERVER['HTTP_HOST'].'/painel');
define('DIRIMG', 'https://'.$_SERVER['HTTP_HOST'].'/assets/img');
define('DIRPORT', 'https://'.$_SERVER['HTTP_HOST'].'/assets/portfolio');

//require 'actions/action-files.php';

/*
echo $_SERVER['SERVER_PROTOCOL'].'<br>';
echo $_SERVER['HTTPS'].'<br>';
echo $_SERVER['HTTP_HOST'].'<br>';
echo $_SERVER['SCRIPT_NAME'].'<br>';
echo $_SERVER['QUERY_STRING'].'<br>';
echo $_SERVER['REQUEST_URI'].'<br>';
echo $_SERVER['SERVER_NAME'].'<br>';

echo $_SERVER['REQUEST_METHOD'].'<br>';
*/
