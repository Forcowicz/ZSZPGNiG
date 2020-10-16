<?php
class Account {
    private $con;

    public function __construct($con) {
        $this->con = $con;
    }

    public function login($un, $pw) {
        $query = mysqli_query($this->con, "SELECT * FROM access WHERE username = '$un' AND password = '$pw'");
        if(mysqli_num_rows($query) === 1) {
            return true;
        } else {
            return false;
        }
    }
}