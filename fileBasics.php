<?php 

$filepath = '\Users\draga\Local Sites\Files-and-Directories\fileBasics.php';

$dirpath = '\Users\draga\Local Sites\Files-and-Directories/';


echo file_exists($filepath) ? 'exists' : 'none';

echo "<br>";

echo file_exists($dirpath) ? 'exists' : 'none';

echo "<br>";

echo is_file($filepath) ? 'file' : 'not file';

echo "<br>";

echo is_dir($dirpath) ? 'dir' : 'not dir';

echo "<br>";