<?php

namespace src;

class Task12
{
    private int $firstValue;
    private int $secondValue;
    private int $result;

    public function __construct(int $firstValue, int $secondValue)
    {
        $this->firstValue = $firstValue;
        $this->secondValue = $secondValue;
    }

    public function add(): Task12
    {
        $this->result = $this->firstValue + $this->secondValue;

        return $this;
    }

    public function addBy(int $number): Task12
    {
        $this->result += $number;

        return $this;
    }

    public function multiply(): Task12
    {
        $this->result = $this->firstValue * $this->secondValue;

        return $this;
    }

    public function multiplyBy($number): Task12
    {
        $this->result *= $number;

        return $this;
    }

    public function divide(): Task12
    {
        if ($this->secondValue === 0) {
            throw new \InvalidArgumentException('division by zero');
        }

        $this->result = $this->firstValue / $this->secondValue;

        return $this;
    }

    public function divideBy(int $number): Task12
    {
        if ($number === 0) {
            throw new \InvalidArgumentException('division by zero');
        }

        $this->result /= $number;

        return $this;
    }

    public function subtract(): Task12
    {
        $this->result = $this->firstValue - $this->secondValue;

        return $this;
    }

    public function subtractBy(int $number): Task12
    {
        $this->result -= $number;

        return $this;
    }

    public function __toString(): string
    {
        return $this->result;
    }
}
