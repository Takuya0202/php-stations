<?php

namespace Src\Station04;

class Question
{
    public function main(): int
    {
        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        $result = 0;
        foreach ($array as $elem) {
            // 4以外の倍数だった場合、break
            if ($elem % 4 === 0 and $elem !== 4) {
                break;
            }
            $result += $elem;
        }
        return $result;
    }
}
