<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 2015/11/23
 * Time: 11:09
 */
$dns = "mysql:host=localhost;dbname=user;charset=utf8";
$user = "root";
$pwd = "1234qwer";
try{
    $db = new PDO($dns,$user,$pwd);
}catch (Exception $e){
    die('Could not connect to the database'.$e);
}
$db->exec("SET NAMES 'UTF8'");  //是客户端和服务端统一编码
//$statement = "select content from tc0_log";
//$foods = $db->query($statement);
//foreach($foods->fetchAll() as $food){
//    echo $food['content'].'<br/>';
//}
//$input = "this is's' a '''pretty dange'rous str'ing";
//echo $db->quote($input);//转义
$insert = $db->prepare("INSERT INTO admin(name,pwd,ip,time) VALUES (?,?,?,now())");
for($i = 10000;$i<100000;$i++){
   $insert->execute(array("admin{$i}",sha1('123465'),"{$_SERVER['REMOTE_ADDR']}"));

}






