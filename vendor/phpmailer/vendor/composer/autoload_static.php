<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcdc46e7199c4d89d808000d73a6131ed
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcdc46e7199c4d89d808000d73a6131ed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcdc46e7199c4d89d808000d73a6131ed::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcdc46e7199c4d89d808000d73a6131ed::$classMap;

        }, null, ClassLoader::class);
    }
}
