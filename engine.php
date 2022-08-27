<?php

require_once 'loader/autoloader.php';
$router = new Router([
    new Route(
        '/',
        function ($context) {
            return Viewer::view('job/main.php', $context);
        }
    ),

    new Route(
        '/home',
        function ($context) {
            return Viewer::view('job/main.php', $context);
        }
    ),

    new Route(
        '/employer',
        function ($context) {
            return Viewer::view('job/employers.php', $context);
        }
    ),
]);
$router->launch();
