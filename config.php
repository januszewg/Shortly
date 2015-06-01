<?php
function url(){
  return sprintf(
    "%s://%s%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME'],'/shortly/'
  );
}

$url = url();
define('URL', $url);
define('HASH_KEY','54b5e50c5b1df');
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'shortly');
define('DB_USER', 'root');
define('DB_PASS', '');
?>

