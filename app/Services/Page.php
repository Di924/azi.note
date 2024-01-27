<?php
namespace App\Services;
class Page
{
    public static function component($part_name)
    {
        require_once "views/components/" . $part_name . ".php";
    }
    public static function vendor($part_name)
    {
        require_once "vendor/" . $part_name . ".php";
    }
    public static function router($part_name)
    {
        require_once "router/" . $part_name . ".php";
    }
}
