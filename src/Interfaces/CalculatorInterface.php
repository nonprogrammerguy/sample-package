<?php

declare(strict_types=1);

namespace Nonprogrammerguy\SamplePackage\Interfaces;

interface CalculatorInterface
{
    public function add(int $value): self;

    public function clear(): self;

    public function getResult(): int;

    public function subtract(int $value): self;
}