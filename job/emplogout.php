<?php

session_start();
unset($_SESSION['employer']);
echo '<script>winddow.location="login";</script>';
