<?php

namespace Wernersoderstrom\WoodwingAssets\Tests;

use Dotenv\Dotenv;
use Orchestra\Testbench\TestCase as Orchestra;
use Wernersoderstrom\WoodwingAssets\AssetsServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            AssetsServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        // Set credentials
        $dotenv = Dotenv::createImmutable(__DIR__.'/../', '.env');
        $dotenv->load();

        config()->set('woodwing-assets.endpoint', env('WOODWING_ASSETS_ENDPOINT'));
        config()->set('woodwing-assets.username', env('WOODWING_ASSETS_USERNAME'));
        config()->set('woodwing-assets.password', env('WOODWING_ASSETS_PASSWORD'));
    }
}
