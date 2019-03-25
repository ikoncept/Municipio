<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4845d6e1e14302c643a104833cfb558a
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
        'ff94b54cc49d91067b6c55e8792511c4' => __DIR__ . '/..' . '/aristath/kirki/kirki.php',
        '8ec4222c68e580a23520eef4abe4380f' => __DIR__ . '/..' . '/shortpixel/shortpixel-php/lib/ShortPixel.php',
        'c93afce03290e70ec0d051b69a50edb0' => __DIR__ . '/..' . '/shortpixel/shortpixel-php/lib/ShortPixel/Exception.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Contracts\\' => 18,
            'Symfony\\Component\\Translation\\' => 30,
            'Symfony\\Component\\Finder\\' => 25,
            'Symfony\\Component\\Debug\\' => 24,
            'ShortPixel\\' => 11,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
        ),
        'I' => 
        array (
            'Illuminate\\View\\' => 16,
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Filesystem\\' => 22,
            'Illuminate\\Events\\' => 18,
            'Illuminate\\Contracts\\' => 21,
            'Illuminate\\Container\\' => 21,
        ),
        'H' => 
        array (
            'HelsingborgStad\\Blade\\' => 22,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 26,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
        'B' => 
        array (
            'BladeComponentLibrary\\' => 22,
        ),
        'A' => 
        array (
            'AcfExportManager\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/contracts',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Symfony\\Component\\Debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/debug',
        ),
        'ShortPixel\\' => 
        array (
            0 => __DIR__ . '/..' . '/shortpixel/shortpixel-php/lib/ShortPixel',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Illuminate\\View\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/view',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/filesystem',
        ),
        'Illuminate\\Events\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/events',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Illuminate\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/container',
        ),
        'HelsingborgStad\\Blade\\' => 
        array (
            0 => __DIR__ . '/..' . '/helsingborg-stad/laravel-blade/src',
        ),
        'Doctrine\\Common\\Inflector\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/inflector/lib/Doctrine/Common/Inflector',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'BladeComponentLibrary\\' => 
        array (
            0 => __DIR__ . '/..' . '/helsingborg-stad/blade-component-library/src',
        ),
        'AcfExportManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/helsingborg-stad/acf-export-manager/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/nesbot/carbon/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4845d6e1e14302c643a104833cfb558a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4845d6e1e14302c643a104833cfb558a::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit4845d6e1e14302c643a104833cfb558a::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}
