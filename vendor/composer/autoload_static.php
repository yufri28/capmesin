<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit56eafabd09c548b2b7eb37efa557424f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Spatie\\PdfToImage\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Spatie\\PdfToImage\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/pdf-to-image/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit56eafabd09c548b2b7eb37efa557424f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit56eafabd09c548b2b7eb37efa557424f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit56eafabd09c548b2b7eb37efa557424f::$classMap;

        }, null, ClassLoader::class);
    }
}
