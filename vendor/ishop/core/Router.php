<?php


namespace ishop;


class Router
{
    protected static $routes = [];
    protected static $route = [];

    public static function add($regexp, $route = [])
    {
        self::$routes[$regexp] = $route;
    }

    /**
     * @return array
     */
    public static function getRoutes()
    {
        return self::$routes;
    }

    /**
     * @return array
     */
    public static function getRoute()
    {
        return self::$route;
    }


    /**
     * @param string $url
     * @return void
     */
    public static function dispatch($url)
    {
        if (self::matchRoute($url)) {
            echo "OK";
        } else {
            echo "NO";
        }
    }

    /**
     * @param string $url
     * @return bool
     */
    public static function matchRoute($url)
    {
        foreach (self::$routes as $pattern => $route) {
            if (preg_match("#{$pattern}#", $url, $matches)) {
                debug($matches);
                return true;
            }
        }
        return false;
    }
}