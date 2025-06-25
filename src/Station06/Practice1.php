<?php

namespace Src\Station06;

class Practice1
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $array = ['red' => 1, 'blue' => 2, 'yellow' => 3];
        print_r($array);
        print_r($array['red']);
    }
}

(new Practice1())->main();
