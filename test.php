<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 2015/11/20
 * Time: 20:55
 */
//$name = $_GET['name'];
//$id = $_GET['id'];
//echo intval($id);
//echo addslashes($name);
//echo $id;
$reg = '/^<script[^>](.*)<\/script>$/';
$str = "<script src='index.php'>alert(1)</script>";
//$reg1 = '/^<script[^>]*>.*<\/script>/';
preg_match_all($reg,$str,$a);
echo preg_replace($reg,"123",$str);
echo '<pre>';
print_r($a);
echo '</pre>';