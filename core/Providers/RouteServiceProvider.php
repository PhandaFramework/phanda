<?php

namespace Core\Providers;

use Phanda\Providers\Routing\AbstractRouteServiceProvider;
use Phanda\Support\Facades\Routing\Router;

class RouteServiceProvider extends AbstractRouteServiceProvider
{
    protected $namespace = 'App\Controllers';

    /**
     * Bootstrap your apps routes here.
     */
    public function initializeRoutes()
    {
        $this->initializeBaseRoutes();
    }

    /**
     * The default base route initialization.
     *
     * The namespace of controllers is automatically set to 'App\Controllers'
     */
    protected function initializeBaseRoutes()
    {
        Router::namespace($this->namespace)
            ->group(base_path('routing/base.php'));
    }
}