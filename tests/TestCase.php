<?php

declare(strict_types=1);

namespace Nonprogrammerguy\SamplePackage\Tests;

use Nonprogrammerguy\SamplePackage\SamplePackageServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getEnvironmentSetUp($app): void
    {
    }

    protected function getPackageProviders($app): array
    {
        return [
            SamplePackageServiceProvider::class,
        ];
    }
}