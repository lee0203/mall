<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitad6c4b8b01fd9e4c945795b472ca73dd
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pay\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pay\\' => 
        array (
            0 => __DIR__ . '/..' . '/zoujingli/pay-php-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitad6c4b8b01fd9e4c945795b472ca73dd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitad6c4b8b01fd9e4c945795b472ca73dd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
