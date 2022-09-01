<?php

namespace src;

class Task9
{
    public function main(int $input): string
    {
        if ($input < 1) {
            throw new \InvalidArgumentException();
        }

        $res = [$input];

        while ($input > 1) {
            if ($input % 2 == 0) {
                $input /= 2;
            } else {
                $input = $input * 3 + 1;
            }

            $res[] = $input;
        }

        return print_r($res, true);
    }
}
