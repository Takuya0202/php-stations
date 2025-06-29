<?php

namespace Src\Station17\Question;

class Question
{
    public function main(): void
    {
        $keybord = new Keyboard();
        $piano = new PianoSound();
        $guitar = new GuitarSound();
        $keybord->play($piano, 'ド');
        $keybord->play($guitar, 'C');
    }
}
