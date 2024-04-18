<?php


echo __FILE__ . "<br>";
echo __DIR__ . "<br>";

echo file_exists(__FILE__) ? 'exist' : 'none';
echo "<br>";

$filepath = __DIR__ . '\fileBasics.php';

echo file_exists($filepath) ? 'exists' : 'none';
echo '<br>';

?>