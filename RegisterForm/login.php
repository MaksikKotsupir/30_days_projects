<?php

    $connection = mysqli_connect('localhost', 'root', '', 'authentication');

    if( isset($_POST['login_btn']) )
        {
            session_start();
            $username = $_POST['username'];
            $password = $_POST['pass_word'];

            $sql = "SELECT * FROM users WHERE username='$username' AND passsword='$password'";
            $result = mysqli_query($connection, $sql);
            
            if($connection){
                $_SESSION['message'] = "You are now logged in";
                $_SESSION['username'] = $username;
                header("location: home.php");
            }else{
                echo "Username/Password combination incorrect";
            }
        }
?>