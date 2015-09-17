<?php
    require("db.phpo");
    if (isset ($_POST['submit'])){
        $first_name = sanitize_post('first_name');
        $last_name = $_POST['last_name'];
        $username = $_POST['username'];
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];

        $ok = 1;
        $query = search('login_data', 'username', $username);
        $row = mysqli_fetch_array ($query);
        if ($row['username'] == $username){
            echo "This username is already taken<br><br>";
            $ok = 0;
        }

        if ($pass1 != $pass2){
            echo "The two passwords don't match<br><br>";
            $ok = 0;
        }
        
        if ($ok){
            //TODO:make password encryption
              $password = $pass1;

             $sql = "INSERT INTO login_data (first_name, last_name, username, password) VALUES ('$first_name', '$last_name', '$username', '$password');";

        
             mysqli_query ($conn, $sql)
             or die (mysqli_error ($conn));
       
    ?>
    <p style = "font-size: 25px; color: red"> Registered successfully </p>
    <?php
        }
    }
?>

<form method = "post" action = "index.php?page=register">
First name:
<input type = "text" name = "first_name">
<br>
Last name:
<input type = "text" name = "last_name">
<br>
Username:
<input type = "text" name = "username">
<br>
Password:
<input type = "password" name = "pass1">
<br>
Repeat password:
<input type = "password" name = "pass2">
<br>
<br>
<button type = "submit" name = "submit"> Register </button>
</form>
