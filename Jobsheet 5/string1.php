<?php 
$loremIpsum ="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.";
echo "<p>$loremIpsum</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . " karakter <br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . " kata <br>";
echo "<p>". strtoupper($loremIpsum) . "</p>";
echo "<p>". strtolower($loremIpsum) . "</p>";

?>