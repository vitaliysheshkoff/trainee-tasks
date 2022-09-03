<?php

namespace src;

class Task2
{
    public function main(string $date): int
    {
        $input = \DateTime::createFromFormat('d-m-Y', $date);
        $errors = \DateTime::getLastErrors();

        if ($input === false || !empty($errors['warning_count'])) {
            throw new \InvalidArgumentException();
        }

        $current = new \DateTime('today' /*'now'*/);

        $inputWithCurrentYear = date_create($input->format($current->format('Y') . '-m-d'));

        // $dateInterval = $current->diff($input);
        $dateInterval = $current->diff($inputWithCurrentYear);

        $daysDiff = (int)$dateInterval->format('%R%a');

        // for input date with current year
        $leapYear = (bool)$current->format('L');

        if ($daysDiff < 0) {
            if ($leapYear) {
                $daysDiff += 366;
            } else {
                $daysDiff += 365;
            }
        }
        //
        return $daysDiff;
    }
}
