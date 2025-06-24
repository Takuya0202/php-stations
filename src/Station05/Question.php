<?php

namespace Src\Station05;

class Question
{
    public function main(): int
    {
        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        $result = 0;
        foreach ($array as $elem) {
            // 4 で割った余りが 2 より大きい値のときcontinue
            if ($elem % 4 > 2) {
                continue;
            }
            // 8以上の時break
            elseif ($elem >= 8) {
                break;
            } else {
                $result += $elem;
            }
        }
        return $result;
    }
}
