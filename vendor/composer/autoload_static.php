<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit88043a06113fcb4041f77ba9313a0bcd
{
    public static $prefixesPsr0 = array (
        'N' => 
        array (
            'NozLib' => 
            array (
                0 => __DIR__ . '/../..' . '/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit88043a06113fcb4041f77ba9313a0bcd::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
