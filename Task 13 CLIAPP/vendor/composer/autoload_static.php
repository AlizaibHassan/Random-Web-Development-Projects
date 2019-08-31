<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf3501ce7d9b949bb06f6aa0593295647
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '0d59ee240a4cd96ddbb4ff164fccea4d' => __DIR__ . '/..' . '/symfony/polyfill-php73/bootstrap.php',
        '763b27438d720a6a43e09188926e7554' => __DIR__ . '/..' . '/dwolla/dwolla-php/lib/client.php',
        'c92090cc1f3e4c81d9a363462c8c7218' => __DIR__ . '/..' . '/dwolla/dwolla-php/lib/account.php',
        'ec2fd2ad78d3ea22d5d73faf2c5ab91b' => __DIR__ . '/..' . '/dwolla/dwolla-php/lib/checkouts.php',
        'd07a09836de472966367774e46b4f00f' => __DIR__ . '/..' . '/dwolla/dwolla-php/lib/contacts.php',
        'f01304cf60a8377f0f28b3369039084e' => __DIR__ . '/..' . '/dwolla/dwolla-php/lib/fundingSources.php',
        'fffa0a893674d412abe81ec7638d8eaf' => __DIR__ . '/..' . '/dwolla/dwolla-php/lib/masspay.php',
        '29e3948359b9f805b7a62732807de76f' => __DIR__ . '/..' . '/dwolla/dwolla-php/lib/oauth.php',
        '9f5dab8499be4571037a04ff022c2163' => __DIR__ . '/..' . '/dwolla/dwolla-php/lib/requests.php',
        'a2dfcd966f50b7c713a0ef78ffedf8d1' => __DIR__ . '/..' . '/dwolla/dwolla-php/lib/transactions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php73\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Contracts\\Service\\' => 26,
            'Symfony\\Component\\Console\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php73\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php73',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Contracts\\Service\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/service-contracts',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Dwolla\\' => 
            array (
                0 => __DIR__ . '/..' . '/dwolla/dwolla-php/lib',
            ),
        ),
    );

    public static $classMap = array (
        'JsonException' => __DIR__ . '/..' . '/symfony/polyfill-php73/Resources/stubs/JsonException.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf3501ce7d9b949bb06f6aa0593295647::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf3501ce7d9b949bb06f6aa0593295647::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf3501ce7d9b949bb06f6aa0593295647::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitf3501ce7d9b949bb06f6aa0593295647::$classMap;

        }, null, ClassLoader::class);
    }
}
