<?php
/**
 * @file PsCaseTest.php
 * @author cuihuan
 * @date 2015/09/11 10:09:31
 * @version $Revision:1.0$
 * @brief  pscase接口单元测试
 *
 **/

require_once dirname(__FILE__) . ('/BankAccount.php');

class PsCaseTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var object pscase类
     */
    protected $pscase;

    /**
     * @brief setup: Sets up the fixture, for example, opens a network connection.
     *
     * This method is called before a test is executed.
     */
    public function setup(){
        $this->pscase = new PsCase();
    }

    /**
     * @brief teardown: Tears down the fixture, for example, closes a network connection.
     *
     * This method is called after a test is executed.
     */
    public function teardown(){
    }


    /**
     * @brief : 测试config文件的获取
     *
     */
    public function testGetConfig()
    {
        $this->assertEquals(true,$this->pscase->debugText("11"));
    }
}