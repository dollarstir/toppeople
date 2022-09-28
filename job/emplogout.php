<?php

session_start();
unset($_SESSION['employer']);
echo '<script>window.location.href = "home";</script>';
