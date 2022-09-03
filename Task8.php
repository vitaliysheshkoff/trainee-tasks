<?php

namespace src;

class Task8
{
    public function main(string $json): string
    {
        if (is_numeric($json)) {
            throw new \InvalidArgumentException();
        }

        $obj = json_decode($json, true);

        if ($obj === null || json_last_error() !== JSON_ERROR_NONE) {
            throw new \InvalidArgumentException();
        }

        $str = '';

        array_walk_recursive($obj, function ($value, $key) use (&$str) {
            $str .= $key . ': ' . $value . "\r\n";
        });

        return rtrim($str);
    }
}
