<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb4e5e915e4da0fbaed6e7c644e3a3ade
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '65262669306b9cfaa9401133253e43a1' => __DIR__ . '/..' . '/torophp/torophp/src/Toro.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
        'L' => 
        array (
            'Link\\Models\\' => 12,
            'Link\\Controllers\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Link\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'Link\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controller',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb4e5e915e4da0fbaed6e7c644e3a3ade::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb4e5e915e4da0fbaed6e7c644e3a3ade::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb4e5e915e4da0fbaed6e7c644e3a3ade::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
