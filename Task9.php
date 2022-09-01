<?php

namespace src;

class Task9
{
    public function main(array $arr, int $number): string
    {
        $len = count($arr);
        $res = [];

        for ($i = 0; $i < $len - 2; $i++) {
            if (($arr[$i] + $arr[$i + 1] + $arr[$i + 2]) == $number) {
                $res[] = "{$arr[$i]} + {$arr[$i + 2]} + {$arr[$i + 2]} = {$number}";
            }
        }

        return print_r($res, true);
    }
}
