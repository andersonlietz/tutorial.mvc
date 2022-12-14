<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit08fa947c62a701f78232c84f02346251
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit08fa947c62a701f78232c84f02346251::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit08fa947c62a701f78232c84f02346251::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit08fa947c62a701f78232c84f02346251::$classMap;

        }, null, ClassLoader::class);
    }
}
