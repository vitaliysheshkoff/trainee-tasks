<?php

namespace src;

class Task6
{
    public function main(int $year, int $lastYear, int $month, int $lastMonth, string $day = 'Monday'): int
    {
        if ($year < 0 || $lastYear < 0 || $month < 0 || $lastMonth < 0) {
            throw new \InvalidArgumentException();
        }

        $amount = ($lastYear - $year - 1) * 12;
        $amount += (12 - $month);
        $amount += ($lastMonth);

        $tmpDate = \DateTime::createFromFormat('j.m.Y', '01'. '.' . $month . '.' . $year);

        $result = 0;
        for ($i = 0; $i < $amount; $i++) {
            if ($tmpDate->format('l') == $day) {
                $result++;
            }

            $tmpDate->modify('+1 month');
        }

        return $result;
    }
}
