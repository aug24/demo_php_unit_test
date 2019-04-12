<?php
require_once('vendor/simpletest/simpletest/autorun.php');
require_once('functions/sql.php');

class DummySqlResponse {
   private $body;
   function write($string) {$this->body = $string; }
   function getBody() {return $this->body;}
}

class TestSql extends UnitTestCase {
    function testSqlMessage() {
        $response = new DummySqlResponse();
        $args = array();
        $args['name'] = 'Justin';

        showSql ($request, $response, $args);

        $this->assertEqual($response->getBody(), "select *\nfrom   Users u\nwhere  u.name = 'Justin'\n");
    }
}
?>
