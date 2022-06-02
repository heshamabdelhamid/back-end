<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitee85d51b2e26e510cf31f4974f644d12
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitee85d51b2e26e510cf31f4974f644d12', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitee85d51b2e26e510cf31f4974f644d12', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitee85d51b2e26e510cf31f4974f644d12::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}