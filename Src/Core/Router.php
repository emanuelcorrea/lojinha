<?php
namespace Src\Core;

use Src\Traits\UrlParser;

class Router
{
    use UrlParser;

    private $routes;

    public function getRoute()
    {
        $url = $this->parserUrl();

        $i = $url[0];

        $this->routes = array(
            '' => 'CatalogController',
            'home' => 'CatalogController',
            'galeria' => 'GaleriaController',
            'produto' => 'ProductController',
            'dashboard' => 'DashboardController'
        );

        if (array_key_exists($i, $this->routes)) {
            if (file_exists(DIR_REQ."App/Controllers/{$this->routes[$i]}.php")) {
                return $this->routes[$i];
            } else {
                echo "bugo";
                return 'ErrorController';
            }
        } else {
            return 'ErrorController';
        }
    }
}
