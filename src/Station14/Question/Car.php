<?php

namespace Src\Station14\Question;

class Car
{
    private const DOOR = 5;
    private static $passenger = 0;

    public function getPassengers()
    {
        echo self::$passenger;
    }

    public function pickup()
    {
        self::$passenger += 1;
        $this->getPassengers();
    }

    public function getDoors()
    {
        echo self::DOOR;
    }
}
