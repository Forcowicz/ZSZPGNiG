<?php
include("assets/includes/config.php");
include("assets/includes/classes/Account.php");
$account = new Account($con);

include("assets/includes/handlers/validation-handler.php");
include("assets/includes/handlers/logout-handler.php");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zespół Szkół PGNiG im. Walorego Goetla w Krakowie</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<?php
    if ($_SESSION['verified'] === false) {
        include_once("assets/includes/verification.php");
    } else {
        include_once("assets/includes/overview.php");
    }
?>
</html>