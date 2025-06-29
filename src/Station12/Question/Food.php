<?php

namespace Src\Station12\Question;

use Carbon\CarbonImmutable;

class Food extends Product
{
    public $useByDate;
    // property はアクセス修飾子・型定義不問、 __construct での定義でなくとも良い
    public function __construct($originalPrice, CarbonImmutable $useByDate)
    {
        parent::__construct($originalPrice);
        $this->useByDate = $useByDate;
    }

    public function price(): int
    {
        $now = CarbonImmutable::now();
        // 5時間未満の場合
        if ($now->diffInHours($this->useByDate) < 5) {
            return floor($this->originalPrice / 2);
        } else {
            return $this->originalPrice;
        }
    }
}
