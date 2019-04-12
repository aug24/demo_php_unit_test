<?php

function saySeeYou ($request, $response, $args) {
    $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    if (in_array($args['day'], $days)) {
       return $response->write("See you on " . $args['day'] . ", " . $args['name']);
    } else {
       $response->write("Unknown day: " . $args['day']);
       return $response->withStatus(400);
    }
};
