<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 2015/11/20
 * Time: 23:10
 */
$dsn = "mysql:host=localhost;dbname=user";
$db = new PDO($dsn,'root','1234qwer');
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$db->exec("SET NAMES 'UTF8'");
//$sql = "insert into tc0_log(name,content,ip,datatime) VALUES('admin','新纪录bug','{$_SERVER['REMOTE_ADDR']}',now())";
//$db->exec($sql);
$insert = $db->prepare("insert into tc0_log(name,content,ip,datatime) VALUES(?,?,?,now())");
$insert->execute(array('user','new bug',"{$_SERVER['REMOTE_ADDR']}"));
$sql = "select * from tc0_log";
$query = $db->prepare($sql);
$query->execute();
echo '<pre>';
print_r($query->fetchAll());
echo '</pre>';
