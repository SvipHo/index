<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 2015/12/2
 * Time: 10:00
 */
//error_reporting(false);
$num = $_GET['num'];
//var_dump($_SERVER);
//if(array_key_exists('HTTP_X_PJAX', $_SERVER) && $_SERVER['HTTP_X_PJAX'] === 'true'){
    if($num == 1) {

        ?>
    <div class="imgwrap">
        <img src="./images/1.jpg" />
    </div>
    <span><a href="num=2" class="next">下一张&gt;&gt;</a></span>
<?php
} else if ($num == 2) {?>
    <div class="imgwrap">
        <img src="./images/2.jpg" />
    </div>
    <span><a href="num=1" class="previous">&lt;&lt;上一张</a>
        <a href="num=3" class="next">下一张&gt;&gt;</a></span>
<?php
} else {?>
    <div class="imgwrap">
        <img src="./images/3.jpg" />
    </div>
    <span><a href="num=2" class="previous">&lt;&lt;上一张</a></span>
<?php
}
//}
?>