<?php

namespace Src\Station08;

class Question
{
    public function main(): array
    {
        $array = [
            ['アザラシ', 'アライグマ'],
            ['イヌ', 'イルカ'],
            ['ウサギ', 'ウシ', 'ウマ'],
        ];
        $addArray_1 = ['イヌ', 'イルカ'];
        $addArray_2 = ['ウサギ', 'ウシ', 'ウマ'];
        array_pop($array);
        array_pop($array);
        array_push($array, $addArray_1);
        array_push($array, $addArray_2);
        return $array;
    }
}
