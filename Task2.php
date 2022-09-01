<?php

namespace src;

class Task2
{
    public const SECONDS_PER_DAY = 86400;

    public function main(string $date): int
    {
        $input = \DateTime::createFromFormat('j.m.Y', $date);

        if ($input !== false) {
            return (int)(time() - strtotime($date)) / self::SECONDS_PER_DAY;
        }

        throw new \InvalidArgumentException();
    }
}
