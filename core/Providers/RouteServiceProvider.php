<?php

namespace Core\Providers;

use Phanda\Providers\Routing\AbstractRouteServiceProvider;

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
        $this->router
            ->namespace($this->namespace)
            ->group(base_path('routing/base.php'));
    }
}