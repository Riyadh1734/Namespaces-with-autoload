<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit66e7856d0b0e71e503a3d5bc171cbc9e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Animals\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Animals\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Animals',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit66e7856d0b0e71e503a3d5bc171cbc9e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit66e7856d0b0e71e503a3d5bc171cbc9e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit66e7856d0b0e71e503a3d5bc171cbc9e::$classMap;

        }, null, ClassLoader::class);
    }
}
