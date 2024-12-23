<?php

namespace Slvler\Covalent\Tests\Unit;

use Slvler\Covalent\CovalentServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            CovalentServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
    }
}
