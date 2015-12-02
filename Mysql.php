<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 2015/11/23
 * Time: 16:10
 */

$dns = "mysql:host=localhost;dbname=user";
try{
    $db = new PDO($dns,'root','1234qwer');
}catch (Exception $e){
    die('Could not connect to the database'.$e);
}
$uid = 1;
$member_table = 'member'.$uid%5;
$sql1 = "select * from {$member_table}";
$sql = '';
$table = array('member0','member1','member2','member3','member4');
foreach($table as $v){
    $sql .= " select * from {$v} UNION ";
}
$sql = substr($sql,0,-6);
echo $sql;

$sth = $db->prepare($sql);
$sth->execute();
var_dump($sth->fetchAll());
