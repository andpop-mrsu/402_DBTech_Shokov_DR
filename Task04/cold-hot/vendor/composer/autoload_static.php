<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit363fe9cf16dc52bf1015290150154a1d
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        '0e3a2ed81f73f13dfd4ca3858cc6a993' => __DIR__ . '/../..' . '/src/Controller.php',
        '39f71bbcf3beac8c271db20aa3f18dd6' => __DIR__ . '/../..' . '/src/View.php',
        '5ca4bd91fc6c05182c0d2bb1d720b7c5' => __DIR__ . '/../..' . '/src/Game.php',
        '59b9d7c5ceba503df3fe38ea1e218efa' => __DIR__ . '/../..' . '/src/Database.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mario2003\\Cold-hot\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mario2003\\Cold-hot\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cli' => 
            array (
                0 => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit363fe9cf16dc52bf1015290150154a1d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit363fe9cf16dc52bf1015290150154a1d::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit363fe9cf16dc52bf1015290150154a1d::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit363fe9cf16dc52bf1015290150154a1d::$classMap;

        }, null, ClassLoader::class);
    }
}