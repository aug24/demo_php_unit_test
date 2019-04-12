<?php
require_once('vendor/simpletest/simpletest/autorun.php');
require_once('functions/goodbye.php');

class DummyGoodbyeResponse {
   private $body;
   function write($string) {$this->body = $string; }
   function getBody() {return $this->body;}
}

class TestGoodbye extends UnitTestCase {
    function testGoodbyeMessage() {
        $response = new DummyGoodbyeResponse();
        $args = array();
        $args['name'] = 'Test';

        sayGoodbye ($request, $response, $args);

        $this->assertEqual($response->getBody(), "Goodbye you awful Test you");
    }
}
?>
