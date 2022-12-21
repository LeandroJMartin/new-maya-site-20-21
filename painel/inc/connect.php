<?php

/**
 * Configuration for database connection
 */

try
{

  $driverOptions = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'];
  $db = new PDO('mysql:host=mysql14-farm10.kinghost.net;dbname=mayacomunicaca28', 'mayacomunicaca28', 'PaiNel20MaYa22', $driverOptions);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e)
{

  echo 'ERROR' . $e->getMessage();

}
