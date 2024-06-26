<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit65f7446fe7437a92a0964712e52bc243
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MyApp\\Services\\' => 15,
            'MyApp\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MyApp\\Services\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Services',
        ),
        'MyApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit65f7446fe7437a92a0964712e52bc243::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit65f7446fe7437a92a0964712e52bc243::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit65f7446fe7437a92a0964712e52bc243::$classMap;

        }, null, ClassLoader::class);
    }
}
