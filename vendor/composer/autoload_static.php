<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdb8d30dfce39ab906cfb97ba4254c89f
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'William\\Files\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'William\\Files\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdb8d30dfce39ab906cfb97ba4254c89f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdb8d30dfce39ab906cfb97ba4254c89f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdb8d30dfce39ab906cfb97ba4254c89f::$classMap;

        }, null, ClassLoader::class);
    }
}
