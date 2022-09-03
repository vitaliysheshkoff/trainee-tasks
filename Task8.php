<?php

namespace src;



class Task8
{
    public function main(string $json): string
    {

        if(is_numeric($json))
            throw new \InvalidArgumentException();

        $obj = json_decode($json, true);

       /* if(!is_object($obj) || json_last_error() !== JSON_ERROR_NONE){
            throw new \InvalidArgumentException();
        }*/

        if ($obj === null || json_last_error() !== JSON_ERROR_NONE) {
            throw new \InvalidArgumentException();
        }

        $str = '';

        array_walk_recursive($obj, function ($value, $key) use (&$str) {
            $str .= $key . ': ' . $value . PHP_EOL;
        });

        return rtrim($str);
    }
}

$task = new Task8();
echo $task->main(-1);
