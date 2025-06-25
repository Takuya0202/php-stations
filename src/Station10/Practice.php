<?php

namespace Src\Station10;

class Practice
{
    public function main(): void
    {
        $number = 10;
        if ($number % 2 === 0) {
            echo $number . 'は偶数です' . PHP_EOL;
        } else {
            echo $number . 'は奇数です';
        }
        $this->checkEvenOrOdd(11);
    }

    // private function checkEvenOrOdd()
    // {
    //     $number = 10;
    //     if ($number % 2 === 0) {
    //         echo $number . 'は偶数です';
    //     } else {
    //         echo $number . 'は奇数です';
    //     }
    // }

    // privateはクラス内でしか呼び起せない
    private function checkEvenOrOdd($number)
    {
        if ($number % 2 === 0) {
            echo $number . 'は偶数です';
        } else {
            echo $number . 'は奇数です';
        }
    }
}

(new Practice())->main();
