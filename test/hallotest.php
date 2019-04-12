<?php
require_once('vendor/simpletest/simpletest/autorun.php');
require_once('functions/hallo.php');

class DummyHalloResponse {
   private $body;
   function write($string) {$this->body = $string; }
   function getBody() {return $this->body;}
}

class TestHallo extends UnitTestCase {
    function testHalloMessage() {
        $response = new DummyHalloResponse();
        $args = array();
        $args['name'] = 'Justin';

        sayHallo ($request, $response, $args);

        $this->assertEqual($response->getBody(), "Hallo Lovely Justin");
    }
}
?>
