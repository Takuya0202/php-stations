<?php

namespace Src\Station09;

class Practice1
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $array = [1, 2, 3, 4, 5, 6];

        $result = [];
        foreach ($array as $value) {
            // if ($value % 2 === 0) {
            //     continue;
            // }

            $result[] = $value;
        }

        print_r($result);
    }
}

(new Practice1())->main();
