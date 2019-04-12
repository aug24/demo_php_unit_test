<?php
require_once('vendor/simpletest/simpletest/autorun.php');
require_once('functions/seeyou.php');

class DummySeeYouResponse {
   private $body;
   private $status;
   function write($body_string) {$this->body = $body_string;}
   function getBody() {return $this->body;}
   function withStatus($status_int) {$this->status = $status_int;}
   function getStatusCode() {return $this->status;}
}

class TestSeeYou extends UnitTestCase {
    function testSeeYouMessage() {
        $response = new DummySeeYouResponse();
        $args = array();
        $args['day'] = 'Sunday';
        $args['name'] = 'Justin';

        saySeeYou ($request, $response, $args);

        $this->assertEqual($response->getBody(), "See you on Sunday, Justin");
    }
    function testSeeYouMessageBadDay() {
        $response = new DummySeeYouResponse();

        $args = array();
        $args['day'] = 'Clogsday';
        $args['name'] = 'Justin';

        saySeeYou ($request, $response, $args);

        $this->assertEqual($response->getStatusCode(), 400);
        $this->assertEqual($response->getBody(), "Unknown day: Clogsday");
    }
}
?>


