<?php

namespace Src\Station17\Question;

class Keyboard
{
    public function play(SoundInterface $interface, string $scale): void
    {
        $is_playing = $interface->isValidatedInput($scale);
        if (!$is_playing) {
            echo 'この音を鳴らすことはできません';
        } else {
            $sound = $interface->sound($scale);
            echo $sound . 'を鳴らします';
        }
    }
}
