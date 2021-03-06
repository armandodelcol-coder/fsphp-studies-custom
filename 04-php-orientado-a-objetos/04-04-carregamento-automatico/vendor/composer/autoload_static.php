<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd31df11c87c0615f6c01681a9a54de00
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd31df11c87c0615f6c01681a9a54de00::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd31df11c87c0615f6c01681a9a54de00::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd31df11c87c0615f6c01681a9a54de00::$classMap;

        }, null, ClassLoader::class);
    }
}
