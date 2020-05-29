<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit672899551b76dd22db0fcf0e1adcbfd9
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Com\\Tecnick\\Color\\' => 18,
            'Com\\Tecnick\\Barcode\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Com\\Tecnick\\Color\\' => 
        array (
            0 => __DIR__ . '/..' . '/tecnickcom/tc-lib-color/src',
        ),
        'Com\\Tecnick\\Barcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/tecnickcom/tc-lib-barcode/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit672899551b76dd22db0fcf0e1adcbfd9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit672899551b76dd22db0fcf0e1adcbfd9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
