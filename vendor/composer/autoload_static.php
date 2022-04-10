<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9f21a970c1999c3132b002805d3ef009
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9f21a970c1999c3132b002805d3ef009::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9f21a970c1999c3132b002805d3ef009::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9f21a970c1999c3132b002805d3ef009::$classMap;

        }, null, ClassLoader::class);
    }
}