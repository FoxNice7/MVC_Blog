<?php

$scriptName = dirname($_SERVER['SCRIPT_NAME']);

$uri = $_SERVER['REQUEST_URI'];

$uri = substr($uri, strlen($scriptName));

$uri = trim(parse_url($uri, PHP_URL_PATH), '/');

$segments = explode('/', $uri);



