<?php
namespace App\Services;
class Router
{
    private static $list = [];
    public static function page($uri, $page)
    {
        self::$list[] = [
            "uri" => $uri,
            "page" => $page
        ];
    }

    public static function enable()
    {
        $query = $_GET['q'];

        foreach (self::$list as $route) {
            if ($route["uri"] === '/' . $query) {
                require_once "views/pages/" . $route['page'] . ".php";
                die();
            }
        }
        self::not_found_page();
    }
    private static function not_found_page()
    {
        require_once "views/errors/404.php";
    }
}
