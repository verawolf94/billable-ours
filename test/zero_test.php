<?php
//zero_test.php
include_once 'includes/settings.php';
require_once 'simpletest/autorun.php';
require_once 'simpletest/web_tester.php';

class ZeroForm extends WebTestCase {

      function testCorrectData() {
        $this->get(VIRTUAL_PATH . '/hours.php');
        $this->assertResponse(200);

    $this->setField("hours", "0");
        $this->setField("rate", "0");
        $this->clickSubmit("Show Pay");

        $this->assertResponse(200);
        $this->assertText("You input 0 hours at a rate of $0 and your pay is $0");
    }

}
