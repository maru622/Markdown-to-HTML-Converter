<?php
if ($argv[1] == 'reverse'){

$input = file_get_contents($argv[2]);
file_put_contents($argv[3], strrev($input));
echo "反転した内容を '{$argv[3]}' に保存しました。\n";
} elseif ($argv[1] == 'copy'){
    $input = file_get_contents($argv[2]);
file_put_contents($argv[3], ($input));
echo "コピーした内容を '{$argv[3]}' に保存しました。\n";
}
