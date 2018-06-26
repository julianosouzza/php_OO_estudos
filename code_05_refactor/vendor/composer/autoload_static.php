<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit002b3706f8cd5bf4f9b83e30d436fc19
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit002b3706f8cd5bf4f9b83e30d436fc19::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit002b3706f8cd5bf4f9b83e30d436fc19::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit002b3706f8cd5bf4f9b83e30d436fc19::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
