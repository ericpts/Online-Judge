<?php
    require 'db.php';
    require 'connection.php';
    $redir = "index.php";
    if(!empty($_GET['location']))
        $redir = $_GET['location'];
    if (!empty($_POST['submit'])){
        $username = sanitize_post('username');
        $password = sanitize_post('password');
        $ok = check_user_data($username, $password);
        if($ok) {

            if(empty($_SESSION))
                session_start();

            $_SESSION['login'] = 1;
            $_SESSION['user'] = $username;

            header("Location: $redir");
            echo "done";
        } else {
            echo "Username or password invalid";
        }
    } else {
        header("Location: $redir");
    }
?>
