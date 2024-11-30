<?php
if ($argv[1] == "Markdown"){
$mdContent = file_get_contents($argv[2]);

// Composerのオートローダーを読み込む
require 'vendor/autoload.php';

// Parsedownクラスのインスタンスを作成
$parsedown = new Parsedown();

// マークダウンをHTMLに変換
$htmlContent = $parsedown->text($mdContent);

file_put_contents($argv[3],$htmlContent);
} elseif ($argv[1] != "Markdown"){
    echo 'マークダウンファイルしか受け付けません。';
}