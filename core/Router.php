<?php

namespace App\Core;


use App\Core\Session;
use App\Exception\RouteNotFound;

class Router
{
    private Request $request;
    private array $routes = [];

    public function __construct()
    {
        $this->request = new Request;
    }

    public function route(string $uri, array $action)
    {
        $this->routes[$uri] = $action;
    }

    public function resolve()
    {
        $uri = "/" . $this->request->getUri()[0];

        $params = $this->request->getUri();
        unset($params[0]);
        $params = count($params) >= 1 ?  array_values($params) : [];

        if (isset($this->routes[$uri])) {

            $route = $this->routes[$uri];

            [$ctrlClasse, $action] = $route;

            if (class_exists($ctrlClasse) && method_exists($ctrlClasse, $action)) {

                $ctrl = new $ctrlClasse($this->request);

                $freetab = ["SecurityController/authentification"];

                $free = str_replace("App\\Controller\\", "", $ctrl::class) . "/" . $action;

                if (in_array($free, $freetab)) {

                    call_user_func_array(array($ctrl, $action), $params);

                } elseif (Session::isConnect()) {

                    call_user_func_array(array($ctrl, $action), $params);
                    
                } else {

                    header("Location:login");
                }
            } else {

                throw new RouteNotFound();
            }
        } else {

            throw new RouteNotFound();
        }
    }
}
