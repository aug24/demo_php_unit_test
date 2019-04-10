<?php

function showSql ($request, $response, $args) {

    $sql = file_get_contents('./resources/name.sql');
    $response_body=str_replace(':name', '\'' . $args['name'] . '\'', $sql);
    return $response->write($response_body);
};
