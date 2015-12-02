<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 2015/12/2
 * Time: 11:08
 */
$num = $_GET['num'];
if($num==1){
    echo <<<_HTML
    <div class="imgwrap">
        <h3>1</h3>
        <h3>1</h3>
        <h3>1</h3>
        <h3>1</h3>
        <h3>1</h3>
        <h3>1</h3>
        <h3>1</h3>
        <h3>1</h3>

    </div>
    <span><a href="num=2" class="next">下一张&gt;&gt;</a></span>
_HTML;

}elseif($num==2){
    echo <<<_HTML
    <div class="imgwrap">
        <h3>2</h3>
        <h3>2</h3>
        <h3>2</h3><h3>2</h3><h3>2</h3>
        <h3>2</h3>
        <h3>2</h3>
        <h3>2</h3>
    </div>
    <span><a href="num=1" class="previous">&lt;&lt;上一张</a>
    <a href="num=3" class="next">下一张&gt;&gt;</a></span>
_HTML;
}else{
    echo <<<_HTML
    <div class="imgwrap">
        <h3>3</h3>
        <h3>3</h3>
        <h3>3</h3>
        <h3>3</h3>
        <h3>3</h3>
        <h3>3</h3>
        <h3>3</h3>
    </div>
    <span><a href="num=2" class="previous">&lt;&lt;上一张</a></span>
_HTML;
}