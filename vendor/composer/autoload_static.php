<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitde97e18b06d067475fd027bf500a9e7d
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitde97e18b06d067475fd027bf500a9e7d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitde97e18b06d067475fd027bf500a9e7d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}