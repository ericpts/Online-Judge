<?php
    require 'db.php';
    require 'connection.php';
    if (!empty($_POST['submit'])){
        $username = sanitize_post('username');
        $password = sanitize_post('password');
        $ok = check_user_data($username, $password);
        if($ok) {
            if(empty($_SESSION))
                session_start();
            $_SESSION['login'] = 1;
            $_SESSION['user'] = $username;
            header("Location: index.php");
            echo "done";
        } else {
            echo "Username or password invalid";
        }
    } else {
        header("Location: index.php");
    }
?>
