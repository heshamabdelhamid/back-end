<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit49ac4cb3056eb07b2c48e0f7726e8a39
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

        spl_autoload_register(array('ComposerAutoloaderInit49ac4cb3056eb07b2c48e0f7726e8a39', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit49ac4cb3056eb07b2c48e0f7726e8a39', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit49ac4cb3056eb07b2c48e0f7726e8a39::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
