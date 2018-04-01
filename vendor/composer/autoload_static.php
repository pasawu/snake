<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf689f3bf5606e438ed5cc520a02fe332
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\composer\\' => 15,
            'think\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-installer/src',
        ),
        'think\\' => 
        array (
            0 => __DIR__ . '/../..' . '/thinkphp/library/think',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf689f3bf5606e438ed5cc520a02fe332::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf689f3bf5606e438ed5cc520a02fe332::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
