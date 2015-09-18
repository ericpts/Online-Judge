<?php

    require 'connection.php';
    require 'db_specs.php';

    function sanitize_post($str) {
        $raw = $_POST[$str];
        return sanitize($raw);
    }
    function sanitize($str) {
        global $conn;
        return $conn->real_escape_string($str);
    }

    function user_exists($username) {
        $query = search('login_data', 'username', $username);
        if(!$query)
            return false;
        else
            return true;
    }

    function generate_salt() {
        global $salt_length;
        $length = $salt_length;
        $raw = openssl_random_pseudo_bytes($length);
        $str = base64_encode($raw);
        return $str;
    }


    function search($table, $name, $value) {
        global $conn;
        $name = sanitize($name);
        $value = sanitize($value);
        $statement = <<<EOT
        SELECT * FROM `$table`  WHERE `$name` = '$value';
EOT;

        return mysqli_query($conn, $statement);
    }

    function add_user($username, $password, $email) {
        global $conn;
        $salt = generate_salt();
        $password_hash = hash("sha256", $password . $salt);

        $query = "INSERT INTO login_data (username, password_hash, salt, email) VALUES ('$username', '$password_hash', '$salt', '$email');";
        mysqli_query($conn, $query)
            or die (mysqli_error($conn));
    }
?>

