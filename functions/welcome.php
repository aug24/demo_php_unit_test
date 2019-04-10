<?php

function sayWelcome ($request, $response, $args) {

    $welcome_message = file_get_contents('./resources/welcome.txt');
    $response_body=str_replace('$name', $args['name'], $welcome_message);

    return $response->write($response_body);
};
