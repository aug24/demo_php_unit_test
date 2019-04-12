<?php

require 'vendor/autoload.php';
require 'functions/hallo.php';
require 'functions/welcome.php';
require 'functions/sql.php';
require 'functions/seeyou.php';

$app = new \Slim\App();

$app->get('/hallo/{name}', sayHallo);
$app->get('/welcome/{name}', sayWelcome);
$app->get('/sql/{name}', showSql);
$app->get('/seeyou/{day}/{name}', seeYou);

#Note that we haven't actually required this function. This is why external test cases are still needed for php.
$app->get('/goodbye/{name}', sayGoodbye);

// Run app
$app->run();
