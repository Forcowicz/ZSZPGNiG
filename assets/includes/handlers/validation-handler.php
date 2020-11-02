<?php
    if(isset($_POST['submit'])) {
        $un = $_POST['username'];
        $pw = $_POST['password'];

        $result = $account->login($un, $pw);
        if($result === true) {
            $_SESSION['verified'] = true;
            header("Location: index.php");
        } else {
            $_SESSION['verified'] = false;
            header("Location: index.php?badlogin");
        }
    }