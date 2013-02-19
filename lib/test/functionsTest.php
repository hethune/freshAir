<?php
require_once('../functions.php');
class functionsTest extends PHPUnit_Framework_TestCase
{
  public function setUp(){ }
  public function tearDown(){ }
  public function testMobile() {
    // test to ensure that the object from an fsockopen is valid
    $valid_mobile_1 = "13338255000";
    $valid_mobile_2 = "+8613338255000";
    $valid_mobile_3 = "+86 13338255000";
    $valid_mobile_4 = "008613338255000";
    $in_valid_mobile_1 = "13330255000";
    $in_valid_mobile_2 = "afasf13338255000";
    $this->assertTrue(checkSanityNumber($valid_mobile_1) == true);
    $this->assertTrue(checkSanityNumber($valid_mobile_2) == true);
    $this->assertTrue(checkSanityNumber($valid_mobile_3) == true);
    $this->assertTrue(checkSanityNumber($valid_mobile_4) == true);
    $this->assertTrue(checkSanityNumber($in_valid_mobile_2) == false);
    $this->assertTrue(checkSanityNumber($in_valid_mobile_2) == false);
  }

  public function testEmail() {
    // test to ensure that the object from an fsockopen is valid
    $valid_email_1 = "tony@126.com";
    $valid_email_2 = "tony603@gmail.com";
    $valid_email_3 = "hyz@berkeley.edu";
    $valid_email_4 = "r<htm>@class.php";
    $in_valid_email_1 = "13330255000";
    $in_valid_email_2 = "<iframe>@<source.com>";
    $this->assertTrue(checkSanityEmail($valid_email_1) == true);
    $this->assertTrue(checkSanityEmail($valid_email_2) == true);
    $this->assertTrue(checkSanityEmail($valid_email_3) == true);
    $this->assertTrue(checkSanityEmail($valid_email_4) == false);
    $this->assertTrue(checkSanityEmail($in_valid_email_2) == false);
    $this->assertTrue(checkSanityEmail($in_valid_email_2) == false);
  }

  public function testCity() {
    $city1 = "chengdu";
    $city2 =  "dsf23";
    $city3 = "chengdu<iframe>";
    $city4 = "<iframe> chengdu";
    $this->assertTrue(checkSanityCity($city1) == true);
    $this->assertTrue(checkSanityCity($city2) == false);
    $this->assertTrue(checkSanityCity($city3) == false);
    $this->assertTrue(checkSanityCity($city4) == false);

  } 


}
?>