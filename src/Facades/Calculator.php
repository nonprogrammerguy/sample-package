<?php

declare(strict_types=1);

namespace Nonprogrammerguy\SamplePackage\Facades;

use Illuminate\Support\Facades\Facade;
use Nonprogrammerguy\SamplePackage\Interfaces\CalculatorInterface;

final class Calculator extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return CalculatorInterface::class;
    }
}