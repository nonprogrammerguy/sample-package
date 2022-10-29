<?php

declare(strict_types=1);

namespace Nonprogrammerguy\SamplePackage;

use Illuminate\Support\ServiceProvider;
use Nonprogrammerguy\SamplePackage\Interfaces\CalculatorInterface;

final class SamplePackageServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(CalculatorInterface::class, Calculator::class);
    }
}