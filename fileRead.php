<?php

$filepath = __DIR__ . '/assets/text2.txt';
$bytes = filesize($filepath);

$handle = fopen($filepath, 'r');

if(!$handle) {
    die( "Failed to open file" );
}

$data = fread($handle, $bytes);
fclose($handle);

// echo nl2br($data);

$data = file_get_contents($filepath);
echo nl2br($data);