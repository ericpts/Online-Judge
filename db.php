<?php
    function sanitize_post($str) {
        $raw = $_POST[$str];
        return sanitize($raw);
    }
    function sanitize($str) {
        return mysqli_real_scape_string($str);
    }
    function search($db, $name, $value) {
        $name = sanitize($name);
        $value = sanitize($value);
        $statement = "SELECT * FROM '$db'  WHERE '$name' = '$value'";
        return mysqli_query($conn, $statement);
    }
?>

