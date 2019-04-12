<?php
require_once('vendor/simpletest/simpletest/autorun.php');
require_once('functions/welcome.php');

class DummyWelcomeResponse {
   private $body;
   function write($string) {$this->body = $string; }
   function getBody() {return $this->body;}
}

class TestWelcome extends UnitTestCase {
    function testWelcomeMessage() {
        $response = new DummyWelcomeResponse();
        $args = array();
        $args['name'] = 'Justin';

        sayWelcome ($request, $response, $args);

        $this->assertEqual($response->getBody(), "Welcome, oh welcome, most wonderful Justin, it is so good to see you, you lovely chap\n");
    }
}
?>
