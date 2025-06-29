<?php

namespace Src\Station12\Practice;

// ここにクラスを定義
class bird extends Animal
{
    public function __construct($type)
    {
        parent::__construct($type);
    }

    public function fly()
    {
        echo '飛ぶ';
    }
}
