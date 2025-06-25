<?php

namespace Src\Station09;

class Practice2
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $fruits = [
            'apple' => 'red',
            'banana' => 'yellow',
            'rime' => 'green',
            'strawberry' => 'red',
            'pineapple' => 'yellow',
        ];

        $result = [];

        foreach ($fruits as $key => $fruit) {
            if ($fruit === 'yellow') {
                continue;
            }

            $result[$key] = $fruit;
        }

        print_r($result);
    }
}

(new Practice2())->main();
