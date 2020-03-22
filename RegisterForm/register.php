<?php

    $connection = mysqli_connect('localhost', 'root', '', 'authentication');

    if( isset($_POST['register_btn']) )
        {
            session_start();
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['pass_word'];
            $password2 = $_POST['pass_word2'];

            if($connection){
                $_SESSION['message'] = "You are now logged in";
                $_SESSION['username'] = $username;
                header("location: home.php");
            }else{
                echo "Database connection faild";
            }

            if($password == $password2) {
            $query = "INSERT INTO users (username,email,passsword)";
            $query .="VALUES ('$username','$email','$password')";

                $sql = "INSERT INTO users (username, email, passsword) VALUES('$username', '$email', '$password')";
                $result = mysqli_query($connection, $sql);
            }else{
                $_SESSION['message'] = "The two passwords do not match";
            }
        }
?>