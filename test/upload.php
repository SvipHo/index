<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 2015/11/25
 * Time: 10:18
 */
/*
使用方法:将上述代码保存为dao4.php,
比如测试用的validatecode.rar在站点http://www.XXXX.com里面,
则用以下代码表示下载连接.
文件名?site=1&file=文件
例如以下URL：
http://www.XXXX.cn/dao4.php?site=1&file=validatecode.rar
*/
$ADMIN['defaulturl'] = "./404.html"; //盗链返回的地址
$okaysites = array(
    "http://192.168.33.10/"
); //白名单
$ADMIN['url_1'] = "http://192.168.33.10/test/index.php"; //下载地点1
$ADMIN['url_2'] = ""; //下载地点2，以此类推
$reffer = $_SERVER['HTTP_REFERER'];
echo $reffer;

if ($reffer) {
    $yes = 0;
    while (list($domain, $subarray) = each($okaysites)) {

        if (ereg($subarray, $reffer)) {
            $yes = 1;
        }
    }
    $theu = "url" . "_" . "$yes";
   // echo $yes."   ".$theu;die;
    if ($ADMIN[$theu] AND $yes == 1) {
        echo $ADMIN[$theu].'/';die;
        header("Location: $ADMIN[$theu]/$file");
    } else {
        header("Location: {$ADMIN['defaulturl']}");
    }
} else {
    header("Location: {$ADMIN['defaulturl']}");
}
?>

?>