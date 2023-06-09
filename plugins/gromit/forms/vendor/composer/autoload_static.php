<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ff2a9b6874e32c663f06dcabc4d51fd
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8ff2a9b6874e32c663f06dcabc4d51fd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8ff2a9b6874e32c663f06dcabc4d51fd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
