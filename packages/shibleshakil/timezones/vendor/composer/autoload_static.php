<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd5ea4b02327b0ea74323cedc8323079
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Shibleshakil\\Timezones\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Shibleshakil\\Timezones\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd5ea4b02327b0ea74323cedc8323079::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd5ea4b02327b0ea74323cedc8323079::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfd5ea4b02327b0ea74323cedc8323079::$classMap;

        }, null, ClassLoader::class);
    }
}
