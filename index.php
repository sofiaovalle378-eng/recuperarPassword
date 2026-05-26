<?php
session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: view/login.php');
    exit;
}
// if ($_SESSION[''])
header('Location: view/login.php');


