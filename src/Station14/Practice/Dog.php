<?php

namespace Src\Station14\Practice;

class Dog extends Animal
{
    private const VOICE = 'wan';
    public const LEGS = 4;
    public static $name = 'aaa';

    public static function barking()
    {
        echo self::VOICE;
    }
}
