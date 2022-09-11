<?php

require_once 'loader/autoloader.php';
$router = new Router([
    new Route(
        '/migration',
        function ($context) {
            return Viewer::view('storage/database.php', $context);
        }
    ),
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

    new Route('/newemployer',
        function ($context) {
            return Viewer::view('job/employer-signup.php', $context);
        }
    ),

    new Route('/employerauth',
        function ($context) {
            return Viewer::view('job/emplogin.php', $context);
        }
    ),

    new Route('/login',
        function ($context) {
            return Viewer::view('job/login.php', $context);
        }
    ),

    new Route('/employerdashboard',
        function ($context) {
            return Viewer::view('job/empdashboard.php', $context);
        }
    ),

    new Route('/newjob',
        function ($context) {
            return Viewer::view('job/createjob.php', $context);
        }
    ),
]);
$router->launch();
