<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf606f4d101ca22453e0a54b1cd94d4e
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../../model',
        ),
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../../class',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbf606f4d101ca22453e0a54b1cd94d4e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbf606f4d101ca22453e0a54b1cd94d4e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbf606f4d101ca22453e0a54b1cd94d4e::$classMap;

        }, null, ClassLoader::class);
    }
}
