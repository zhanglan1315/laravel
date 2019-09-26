<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
  /**
   * @global
   */
  protected $middleware = [
    \Barryvdh\Cors\HandleCors::class,
    \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
  ];

  /**
   * @groups
   */
  protected $middlewareGroups = [
    'api' => [
      'throttle:200,1',
    ]
  ];

  /**
   * @define
   */
  protected $routeMiddleware = [
    'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
  ];

  /**
   * @priority
   */
  protected $middlewarePriority = [

  ];
}
