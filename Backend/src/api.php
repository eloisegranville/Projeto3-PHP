<?php

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/data.php';      
require_once __DIR__ . '/services.php'; 
require_once __DIR__ . '/controllers.php';
require_once __DIR__ . '/validation.php';

$method = $_SERVER['REQUEST_METHOD'];

match ($method) {
    'GET'    => handleGet($dataFile),
    'POST'   => handlePost($dataFile),
    'PUT'    => handlePut($dataFile),
    'PATCH'  => handlePatch($dataFile),
    'DELETE' => handleDelete($dataFile),
    default  => handleMethodNotAllowed(),
};
