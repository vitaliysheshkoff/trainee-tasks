<?php

namespace src;

class Task5
{
    public function main(int $n): string
    {
        if ($n < 0) {
            throw new \InvalidArgumentException();
        }

        $previous = 0;
        $next = 1;
        $result = 0;

        while (strlen($result) < $n) {
            $result = $this->add($previous, $next);
            $previous = $next;
            $next = $result;
        }

        return $result;
    }

    public function add(string $a, string $b): string
    {
        $x = str_split($a);
        $y = str_split($b);

        $tmp = 0;

        $result = [];

        while (count($x) || count($y)) {
            $iterResult = array_pop($x) + array_pop($y) + $tmp;

            $stringIterResult = (string)$iterResult;

            if ($iterResult >= 10) {
                $tmp = 1;
                $stringIterResult = substr($stringIterResult, -1);
            } else {
                $tmp = 0;
            }

            array_unshift($result, $stringIterResult);
        }

        if ($tmp) {
            array_unshift($result, '1');
        }

        return ltrim(implode($result));
    }
}
