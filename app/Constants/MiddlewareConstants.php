<?php 
namespace App\Constants;

/**
 * Registers custom middleware aliases available to application routes.
 */
class MiddlewareConstants
{
    /**
     * Middleware aliases keyed by the short name used in route definitions.
     *
     * @var array<string, class-string>
     */
    public static $aliases = [ 
        //'auth' => \App\Middleware\Authenticate::class, // For a sample Authenticate middleware.
    ];
}
