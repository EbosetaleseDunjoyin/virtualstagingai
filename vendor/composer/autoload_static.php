<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0c445ee2ca18ceac8cca9e35fd0e20fc
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0c445ee2ca18ceac8cca9e35fd0e20fc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0c445ee2ca18ceac8cca9e35fd0e20fc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0c445ee2ca18ceac8cca9e35fd0e20fc::$classMap;

        }, null, ClassLoader::class);
    }
}
