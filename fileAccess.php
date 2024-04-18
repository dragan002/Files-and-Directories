<?php

$filepath = __DIR__ . '/assets/text2.txt';

$handle = fopen($filepath, 'r');

if(!$handle) {
    die( "Failed to open file" );
}

echo "Success";
fclose($handle);