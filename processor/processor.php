<?php

require '../loader/autoloader.php';
require '../fragement/bars.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'emploerregister':
            extract($_POST);
            employerregister($name, $email, $phone, $address, $password, $repass);

            break;

        case 'newsletter':
            extract($_POST);
            newsletter($email);
            break;

        case 'employerlogin':
            extract($_POST);
            employerlogin($login, $password);
            break;

        case 'employerchangepass':
            extract($_POST);
            employerchangepass($oldpass, $newpass, $repass);
            break;

        case 'newjob':
            extract($_POST);
            newjob($title, $company, $vacancy, $type, $gender, $requirement, $description, $location, $salary, $category, $experience, $qualification, $deadline);
            break;

        case 'editjob':
            extract($_POST);
            editjob($title, $company, $vacancy, $type, $gender, $requirement, $description, $location, $salary, $category, $experience, $qualification, $deadline, $id);
            break;
        default:

        break;
    }
}
