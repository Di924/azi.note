<?php
use App\Services\Router;
Router::page('/dashboard', 'dashboard');
Router::page('/news', 'news');
Router::page('/profile', 'profile');
Router::page('/task', 'task');
Router::page('/users', 'users');
Router::page('/login', 'login');
Router::page('/reg', 'reg');
Router::page('/main', 'main');
Router::page('/', 'main');
Router::enable();
//Route('/test', 'test.php');