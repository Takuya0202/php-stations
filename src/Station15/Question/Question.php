<?php

namespace Src\Station15\Question;

class Question
{
    public function main($multiplieds, $multiplier): array
    {
        $array = Calculator::multiply($multiplieds, $multiplier);
        return $array;
    }
}
