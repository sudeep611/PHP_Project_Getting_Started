<?php

// Autoload files using the Composer autoloader.
require_once __DIR__ . '/vendor/autoload.php';

use HelloWorld\HelloWorld;

$entry = new HelloWorld();
echo($entry->printHelloWorld());