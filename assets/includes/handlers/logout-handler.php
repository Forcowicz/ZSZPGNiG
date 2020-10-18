<?php
if(isset($_GET['logout'])) {
    $account->logout();
    header("Location: index.php");
    exit();
}