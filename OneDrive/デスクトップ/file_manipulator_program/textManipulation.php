

<?php
$pathname = 'test.txt';
$file = fopen($pathname, 'r');
$contents = fread($file, filesize($pathname));
fclose($file);

$file = fopen($pathname, 'w');
fwrite($file, $contents . "\nAppending more text to this file!");
fclose($file);

$content = file_get_contents('test.txt');
echo $content;