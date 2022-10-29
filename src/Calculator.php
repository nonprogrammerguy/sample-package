<?php

declare(strict_types=1);

namespace Nonprogrammerguy\SamplePackage;

use Nonprogrammerguy\SamplePackage\Interfaces\CalculatorInterface;

final class Calculator implements CalculatorInterface
{
    private int $result = 0;

    public function add(int $value): self
    {
        $this->result += $value;

        return $this;
    }

    public function clear(): self
    {
        $this->result = 0;

        return $this;
    }

    public function getResult(): int
    {
        return $this->result;
    }

    public function subtract(int $value): self
    {
        $this->result -= $value;

        return $this;
    }
}