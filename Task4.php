<?php

namespace src;

class Task4
{
    public function main(string $input): string
    {
        $result = ucwords($input, '_- ');

        return str_replace(['_', '-', ' '], '', $result);
    }
}
