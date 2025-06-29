<?php

namespace Src\Station12\Practice;

require_once('vendor/autoload.php');

class Practice
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $bird = new Bird(type: 'parrot'); // インスタンスの作成
        $bird->fly();
        echo $bird->type;
    }
}

(new Practice())->main();
