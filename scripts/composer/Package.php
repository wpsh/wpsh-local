<?php

namespace WPSH\Local;

use Composer\Factory;
use Composer\Installer\PackageEvent;

class Package {

    public static function postPackageInstall(PackageEvent $event) {
        $package = $event->getOperation()->getPackage();
        $projectDirectory = dirname(Factory::getComposerFile());

        if ('psr/log' === $package->getName() && ! self::hasVagrantFile($projectDirectory)) {
            // TODO Generate and write the Vagrantfile.
        }
    }

    protected static function hasVagrantFile($directory) {
        return file_exists($directory . '/Vagrantfile');
    }

}