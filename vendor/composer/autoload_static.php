<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc3d7102eabfd53ae31011485a602fa79
{
    public static $files = array (
        '2a472f9d047c9c8ee37803493001a637' => __DIR__ . '/..' . '/firegento/fastsimpleimport/registration.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'FireGento\\FastSimpleImport\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'FireGento\\FastSimpleImport\\' => 
        array (
            0 => __DIR__ . '/..' . '/firegento/fastsimpleimport',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc3d7102eabfd53ae31011485a602fa79::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc3d7102eabfd53ae31011485a602fa79::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc3d7102eabfd53ae31011485a602fa79::$classMap;

        }, null, ClassLoader::class);
    }
}
