<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5cc24bf9ee339a45757cff8e640e22e3
{
    public static $prefixLengthsPsr4 = array (
        'f' => 
        array (
            'fadeout\\' => 8,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'V' => 
        array (
            'Valitron\\' => 9,
        ),
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'fadeout\\' => 
        array (
            0 => __DIR__ . '/..' . '/fadeout/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Valitron\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/valitron/src/Valitron',
        ),
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5cc24bf9ee339a45757cff8e640e22e3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5cc24bf9ee339a45757cff8e640e22e3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
