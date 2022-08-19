<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit116d7f467d9088a52878d6d81104b64a
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CRM\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CRM\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit116d7f467d9088a52878d6d81104b64a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit116d7f467d9088a52878d6d81104b64a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit116d7f467d9088a52878d6d81104b64a::$classMap;

        }, null, ClassLoader::class);
    }
}
