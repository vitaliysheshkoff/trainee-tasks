<?php

namespace src;

class Task9
{
    public function main(array $arr, int $number): array
    {
        /*if (count($arr) < 3 || $number <= 0 || !$this->checkISArrayPositive($arr)) {
            throw new \InvalidArgumentException();
        }*/

        $len = count($arr);
        $res = [];

        for ($i = 0; $i < $len - 2; $i++) {
            if (($arr[$i] + $arr[$i + 1] + $arr[$i + 2]) == $number) {
                $res[] = "{$arr[$i]} + {$arr[$i + 1]} + {$arr[$i + 2]} = {$number}";
            }
        }

        if (count($res) == 0) {
            throw new \InvalidArgumentException();
        }

        return $res;
    }
}
