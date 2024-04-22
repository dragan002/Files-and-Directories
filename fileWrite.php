<?php

$filepath = __DIR__ . '/assets/text3Write.txt';

$handle = fopen($filepath, 'w');

if(!$handle) {
    die( "Failed to open file" );
}

fwrite($handle, 'THis is sample for creating and writing');
fwrite($handle, 'THis is sample for creating and writingssssssssssss');
fclose($handle);


$filepath = __DIR__ . '/assets/text4Write.txt';
$data = "A page of data";

file_put_contents($filepath, $data);