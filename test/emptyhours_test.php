<?php
//emptyhours_test.php
include_once 'includes/settings.php';
require_once 'simpletest/autorun.php';
require_once 'simpletest/web_tester.php';

class EmptyHoursForm extends WebTestCase {

      function testCorrectData() {
        $this->get(VIRTUAL_PATH . '/hours.php');
        $this->assertResponse(200);

    $this->setField("hours", "");
        $this->setField("rate", "");
        $this->clickSubmit("Show Pay");

        $this->assertResponse(200);
        $this->assertText("Enter More Hours");
    }

}
