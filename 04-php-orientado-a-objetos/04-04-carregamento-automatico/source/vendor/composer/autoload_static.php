<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5db7a0162809a144148a4d57eaabd04d
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5db7a0162809a144148a4d57eaabd04d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5db7a0162809a144148a4d57eaabd04d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5db7a0162809a144148a4d57eaabd04d::$classMap;

        }, null, ClassLoader::class);
    }
}
