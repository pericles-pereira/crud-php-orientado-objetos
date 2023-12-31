<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit40d0bb6704bbaf4088c41c93d3d07e1d
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit40d0bb6704bbaf4088c41c93d3d07e1d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit40d0bb6704bbaf4088c41c93d3d07e1d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit40d0bb6704bbaf4088c41c93d3d07e1d::$classMap;

        }, null, ClassLoader::class);
    }
}
