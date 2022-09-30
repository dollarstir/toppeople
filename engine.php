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

    new Route('/register',
        function ($context) {
            return Viewer::view('job/signup.php', $context);
        }
    ),

    new Route('/newcandidate',
        function ($context) {
            return Viewer::view('job/candidate-signup.php', $context);
        }
    ),

    new Route('/newcandidate2',
        function ($context) {
            return Viewer::view('job/candidate-signup2.php', $context);
        }
    ),

    new Route('/candidateauth',
        function ($context) {
            return Viewer::view('job/candidatelogin.php', $context);
        }
    ),

    new Route('/employerlogout',
        function ($context) {
            return Viewer::view('job/emplogout.php', $context);
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

    new Route('/about',
        function ($context) {
            return Viewer::view('job/about.php', $context);
        }
    ),
    new Route('/contact',
        function ($context) {
            return Viewer::view('job/contact.php', $context);
        }
    ),

    new Route('/editjob',
        function ($context) {
            return Viewer::view('job/updatejob.php', $context);
        }
    ),
    new Route('/employersjobs',
        function ($context) {
            return Viewer::view('job/empjobview.php', $context);
        }
    ),
]);
$router->launch();
