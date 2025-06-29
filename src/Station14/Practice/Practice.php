<?php

namespace Src\Station14\Practice;

require_once('vendor/autoload.php');

class Practice
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $dog = new Dog();
        $dog->barking();
        echo Dog::$name;
    }
}

(new Practice)->main();
