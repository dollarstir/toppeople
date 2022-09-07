<?php

require '../loader/autoloader.php';
require '../fragement/bars.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'emploerregister':
            extract($_POST);
            employerregister($name, $email, $phone, $address, $password, $repass);

            break;

        default:

        break;
    }
}
