<?php

namespace Wernersoderstrom\WoodwingAssets;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AssetsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('woodwing-assets')->hasConfigFile();
    }
}
