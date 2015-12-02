<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 2015/11/20
 * Time: 19:42
 */
session_start();
$_SESSION['name'] = 'asd';

$_SESSION['password'] = 'asd';
echo session_id();
echo session_name();
var_dump($_SESSION);
echo '<a href="index.php">index</a>';