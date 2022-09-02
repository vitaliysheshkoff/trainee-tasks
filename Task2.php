<?php

namespace src;

class Task2
{
    public function main(string $date): int
    {
        $input = \DateTime::createFromFormat('j-m-Y', $date);

        if ($input === false) {
            throw new \InvalidArgumentException();
        }

        $current = new \DateTime('now');

        $answer = $input->diff($current);

        return $answer->days;
    }
}
