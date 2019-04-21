<?php 

session_start();

define('dbname', 'todo_app');
define('host', '127.0.0.1');

$_SESSION['user_id'] = 1;

$dns = 'mysql:dbname=' . dbname . ';' . 'host=' . host;

// $db = new PDO('mysql:dbname=todo_app;host=127.0.0.1', 'root', '');
$db = new PDO($dns, 'root', '');

// Handle this in some other way

if(!isset($_SESSION['user_id'])) {
    die('You are not sign in');
}