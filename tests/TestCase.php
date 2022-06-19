<?php


namespace qwerty\Fontawesome\Tests;


use qwerty\Fontawesome\QwertyFontAwesomeServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{


    protected function setUp(): void
    {
        parent::setUp();
        //$this->withFactories(__DIR__.'/../Database/Factories');
        $this->withFactories(realpath(dirname(__DIR__) . '/Database/Factories'));

    }

    protected function getPackageProviders($app)
    {
        return [
            QwertyFontAwesomeServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {

        $app                                    = config('Database.connections');
        $app['single_test_database_connection'] = [
            'driver'      => 'mysql',
            'host'        => env('DB_HOST', '127.0.0.1'),
            'port'        => env('DB_PORT', '3306'),
            'Database'    => 'testdb',
            'username'    => env('DB_USERNAME', 'root'),
            'password'    => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset'     => 'utf8mb4',
            'collation'   => 'utf8mb4_unicode_ci',
            'prefix'      => '',
            'strict'      => true,
            'engine'      => null,
        ];
        config()->set('Database.connections', $app);
        config()->set('Database.default', 'single_test_database_connection');


    }
}