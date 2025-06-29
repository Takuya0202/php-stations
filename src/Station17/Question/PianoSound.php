<?php

namespace Src\Station17\Question;

class PianoSound implements SoundInterface
{
    public const INSTRUMENT_NAME = 'ピアノ';
    public function isValidatedInput(string $scale): bool
    {
        $in_scale = ['ド', 'レ', 'ミ', 'ファ', 'ソ', 'ラ', 'シ'];
        if (in_array($scale, $in_scale)) {
            return true;
        } else {
            return false;
        }
    }
    public function sound(string $scale): string
    {
        return self::INSTRUMENT_NAME . 'の' . $scale;
    }
}
