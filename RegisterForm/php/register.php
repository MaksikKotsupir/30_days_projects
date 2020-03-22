<?php
    session_start();

    $db = mysql_connect("localhost", "root", "", "authentication");

    if(isset($_POST['register_btn'])){
        session_start();
        $username = mysql_real_escape_string($_POST['username']);
        $email = mysql_real_escape_string($_POST['email']);
        $password = mysql_real_escape_string($_POST['password']);
        $password2 = mysql_real_escape_string($_POST['password2']);

        if($password == $password2) {
            $password = md5($password);
            $sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
            mysql_query($db, $sql);
            $_SESSION['message'] = "You are now logged in";
            $_SESSION['username'] = $username;
            header("location: php/home.php");

        }else{
            $_SESSION['message'] = "The two passwords do not match";
        }
    }
?>