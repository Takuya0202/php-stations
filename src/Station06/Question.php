<?php

namespace Src\Station06;

class Question
{
    public function main(): array
    {
        $array = ['red', 'blue', 'yellow'];
        // index0,1に追加
        array_unshift($array, 'white', 'black');
        // yellow(末尾)を削除
        array_pop($array);
        // インデックス番号3　redとblueの間にgreen追加
        array_splice($array, 3, 0, 'green');
        return $array;
    }
}
