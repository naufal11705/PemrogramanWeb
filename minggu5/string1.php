<?php
$loremIpsum="Lorem ipsum dolor sit amet consectetur adipisicing elit. Error dolorum, 
animi eaque, assumenda quidem quas sequi perferendis porro itaque doloribus
eveniet earum! Dignissimos ab harum ex iure quis sit obcaecati, vel consectetur
fuga incidunt.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang Karakter : " . strlen($loremIpsum) . "<br>";
echo "Panjang Kata : " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
?>