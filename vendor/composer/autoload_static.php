<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit902b1af830c4df3e1b4792576a311948
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit902b1af830c4df3e1b4792576a311948::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit902b1af830c4df3e1b4792576a311948::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
