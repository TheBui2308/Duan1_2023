<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaee7fed7398408532d17e0737b42963e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitaee7fed7398408532d17e0737b42963e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaee7fed7398408532d17e0737b42963e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaee7fed7398408532d17e0737b42963e::$classMap;

        }, null, ClassLoader::class);
    }
}
