<?php

function sayGoodbye ($request, $response, $args) {
    return $response->write("Goodbye you awful " . $args['name'] . " you");
};
