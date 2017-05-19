<?php

define('DB_HOST','localhost');
define('DB_NAME','studio-mozart');
define('DB_USER','root');
define('DB_PASS','paulsniezak123.');

try
{
  $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
}
catch (Exception $e)
{
  die('Could not connect: ') . $e->getMessage();
}
