<?php

namespace Src\Station13\Question;

class Car extends Vehicle
{
    public function hazard()
    {
        echo 'ハザードランプを点灯する';
    }

    protected function run()
    {
        $this->maxSpeed = 60;
        echo 'アクセルを踏む';
    }

    protected function back()
    {
        $this->hazard();
        echo 'バックする';
    }
}
