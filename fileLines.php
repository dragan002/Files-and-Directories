<?php

$filepath = __DIR__ . '/assets/annual.csv';

$handle = fopen($filepath, 'r');

$data = '';

if(!$handle) {
    die( "Failed to open file" );
}

while (!feof($handle)) {

   $row = fgets($handle);
   $array = explode(',', $row);
   echo $array[5] . "<br>"; 
}


fclose($handle);

