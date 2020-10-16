<?php
ob_start();
$inactive = 600;
ini_set('session.gc_maxlifetime', $inactive);
session_start();
if(!isset($_SESSION['verified'])) {
    $_SESSION['verified'] = false;
}
if(isset($_SESSION['timeout']) && (time() - $_SESSION['timeout'] > $inactive)) {
    session_unset();
    session_destroy();
}
if(isset($_SESSION['verified']) && $_SESSION['verified'] === true) {
    $_SESSION['timeout'] = time();
}

date_default_timezone_set('Europe/Warsaw');

$con = mysqli_connect("localhost", "root", "", "brzozowa5");
    if(mysqli_connect_errno()) {
        echo "Nie udało się połaczyć z bazą danych." . mysqli_connect_errno();
    }
