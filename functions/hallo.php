<?php

function sayHallo ($request, $response, $args) {

# Note that the case on 'Lovely' is wrong...
    return $response->write("Hallo lovely " . $args['name']);
};
