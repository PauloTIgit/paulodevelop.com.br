<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite876eaf62c8a01df0dc18e24cb1390fb
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInite876eaf62c8a01df0dc18e24cb1390fb', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite876eaf62c8a01df0dc18e24cb1390fb', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite876eaf62c8a01df0dc18e24cb1390fb::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
