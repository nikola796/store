<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcdcca3a1112aba7f12a49dff6d1130c3
{
    public static $files = array (
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
        '3a37ebac017bc098e9a86b35401e7a68' => __DIR__ . '/..' . '/mongodb/mongodb/src/functions.php',
        'bbb610b8ed3f906ac4e5bffda82f9e34' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MongoDB\\' => 8,
        ),
        'A' => 
        array (
            'App\\Core\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MongoDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/mongodb/mongodb/src',
        ),
        'App\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Phroute' => 
            array (
                0 => __DIR__ . '/..' . '/phroute/phroute/src',
            ),
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\CategoriesController' => __DIR__ . '/../..' . '/app/controllers/CategoriesController.php',
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/app/controllers/PagesController.php',
        'App\\Controllers\\ProductsController' => __DIR__ . '/../..' . '/app/controllers/ProductsController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Models\\Category' => __DIR__ . '/../..' . '/app/models/Category.php',
        'App\\Models\\Product' => __DIR__ . '/../..' . '/app/models/Product.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'Phroute\\Dispatcher' => __DIR__ . '/..' . '/phroute/phroute/src/Phroute/Dispatcher.php',
        'Phroute\\Dispatcher\\DispatcherTest' => __DIR__ . '/..' . '/phroute/phroute/test/Dispatcher/DispatcherTest.php',
        'Phroute\\Dispatcher\\Test' => __DIR__ . '/..' . '/phroute/phroute/test/Dispatcher/DispatcherTest.php',
        'Phroute\\Exception\\BadRouteException' => __DIR__ . '/..' . '/phroute/phroute/src/Phroute/Exception/BadRouteException.php',
        'Phroute\\Exception\\HttpException' => __DIR__ . '/..' . '/phroute/phroute/src/Phroute/Exception/HttpException.php',
        'Phroute\\Exception\\HttpMethodNotAllowedException' => __DIR__ . '/..' . '/phroute/phroute/src/Phroute/Exception/HttpMethodNotAllowedException.php',
        'Phroute\\Exception\\HttpRouteNotFoundException' => __DIR__ . '/..' . '/phroute/phroute/src/Phroute/Exception/HttpRouteNotFoundException.php',
        'Phroute\\HandlerResolver' => __DIR__ . '/..' . '/phroute/phroute/src/Phroute/HandlerResolver.php',
        'Phroute\\HandlerResolverInterface' => __DIR__ . '/..' . '/phroute/phroute/src/Phroute/HandlerResolverInterface.php',
        'Phroute\\Route' => __DIR__ . '/..' . '/phroute/phroute/src/Phroute/Route.php',
        'Phroute\\RouteCollector' => __DIR__ . '/..' . '/phroute/phroute/src/Phroute/RouteCollector.php',
        'Phroute\\RouteParser' => __DIR__ . '/..' . '/phroute/phroute/src/Phroute/RouteParser.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcdcca3a1112aba7f12a49dff6d1130c3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcdcca3a1112aba7f12a49dff6d1130c3::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitcdcca3a1112aba7f12a49dff6d1130c3::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitcdcca3a1112aba7f12a49dff6d1130c3::$classMap;

        }, null, ClassLoader::class);
    }
}
