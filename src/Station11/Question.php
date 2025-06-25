<?php

namespace Src\Station11;

class Question
{
    public function main(array $sweets): array
    {
        $lowerThreeHundredsSweets = $this->getSweetsLessThanBudget($sweets, 300);
        $keys = $this->getRandomKeys($lowerThreeHundredsSweets, 300);
        $result = $this->makeCombination($lowerThreeHundredsSweets, $keys);
        return $result;
    }

    private function getSweetsLessThanBudget(array $sweets, int $budget)
    {
        $lowerThreeHundredsSweets = [];
        // 300円以上のお菓子を排除
        foreach ($sweets as $sweet) {
            if ($sweet['price'] >= $budget) {
                continue;
            } else {
                $lowerThreeHundredsSweets[] = $sweet;
            }
        }
        return $lowerThreeHundredsSweets;
    }

    private function getRandomKeys(array $lessThanBudgetSweets, int $budget)
    {
        $array = array_keys($lessThanBudgetSweets);
        while (true) {
            shuffle($array);
            $threeArray = array_slice($array, 0, 3);
            $total = 0;

            foreach ($threeArray as $value) {
                $total += $lessThanBudgetSweets[$value]['price'];
            }
            if ($total <= $budget) {
                break;
            }
        }

        print_r($threeArray);
        sort($threeArray);
        return $threeArray;
        // // ランダムに3つ抽選。
        // while (true) {
        //     $conbination = [];
        //     $arr = array_rand($lessThanBudgetSweets, 3);
        //     foreach ($arr as $key) {
        //         $conbination[$key] = $lessThanBudgetSweets[$key];
        //     }
        //     print_r($conbination);
        //     $total = 0;
        //     foreach ($conbination as $value) {
        //         $total += $value['price'];
        //     }
        //     // 予算を超過しなかった場合、break
        //     if ($total <= $budget) {
        //         break;
        //     }
        // }
        // // お菓子の名前をキーとして保存
        // $keys = [];
        // foreach ($conbination as $key) {
        //     $keys[] = $key['name'];
        // }
        // return $keys;
    }

    private function makeCombination(array $sweets, array $keys)
    {
        // キーと一致するお菓子の配列を作成
        $result = [];
        foreach ($keys as $key) {
            $result[] = $sweets[$key];
        }
        return $result;
    }
}
