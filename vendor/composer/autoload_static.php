<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc85bcff03de3c0633027e395355cdae3
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpScience\\TextRank\\' => 20,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
        'A' => 
        array (
            'AlpacaBot\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpScience\\TextRank\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-science/textrank/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'AlpacaBot\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc85bcff03de3c0633027e395355cdae3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc85bcff03de3c0633027e395355cdae3::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc85bcff03de3c0633027e395355cdae3::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc85bcff03de3c0633027e395355cdae3::$classMap;

        }, null, ClassLoader::class);
    }
}
