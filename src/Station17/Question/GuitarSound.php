<?php

namespace Src\Station17\Question;

class GuitarSound implements SoundInterface
{
    public const INSTRUMENT_NAME = 'ギター';
    public function isValidatedInput(string $scale): bool
    {
        $in_scale = ['C', 'D', 'E', 'F', 'G', 'A', 'B'];
        if (in_array($scale, $in_scale)) {
            return true;
        } else {
            return false;
        }
    }
    public function sound(string $scale): string
    {
        $result = $this->effect($scale);
        return $result;
    }
    private function effect(string $scale): string
    {
        return 'エフェクトをかけた' . self::INSTRUMENT_NAME . 'の' .  $scale;
    }
}
