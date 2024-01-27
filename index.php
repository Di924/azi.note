<?php
require_once __DIR__."/vendor/autoload.php";
use App\Services\Page;
Page::component("header");
Page::component("menu");
Page::router("routes");
Page::component("footer");