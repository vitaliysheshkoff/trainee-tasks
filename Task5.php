<?php

namespace src;

class Task5
{
    public function main(int $n): float
    {
        $previous = 0;
        $next = 1;
        $result = 0;

        while (strlen($result) < $n) {
            $result = $previous + $next;
            $previous = $next;
            $next = $result;
        }

        return $result;
    }
}

$res = new Task5;
echo $res->main(20);
