<?php

namespace slvler\covalent\Tests\Unit;

use slvler\covalent\CovalentServiceProvider;

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
