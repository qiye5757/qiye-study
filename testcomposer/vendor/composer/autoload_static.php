<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit602593796c7679fa58a6003b124da455
{
    public static $prefixesPsr0 = array (
        't' => 
        array (
            'test\\' => 
            array (
                0 => __DIR__ . '/../..' . '/',
            ),
        ),
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit602593796c7679fa58a6003b124da455::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
