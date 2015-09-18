<?php
    require("db.php");
    if (isset ($_POST['submit'])){
        $username = sanitize_post('username');
        $pass1 = sanitize_post('pass1');
        $pass2 = sanitize_post('pass2');
        $email = sanitize_post('email');

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
<html>
    <head>
        <title>
            Sheikharena
        </title>

        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/signin.css" rel="stylesheet">
    </head>

    <body>
        <script src="http://code.jquery.com/jquery-2.1.4.js"></script>
        <script src="js/bootstrap.js"></script>

        <div class="container-fluid">
            <form method="post" action="index.php?page=register" class="form-signin">
            <fieldset>
                <input type="text" maxlength="50" placeholder="Username" name="username" id="username" class="form-control"/>
                <input type="password" maxlength="50" placeholder="Password" name="password" id="password" class="form-control"/>
                <input type="text" maxlength="50" placeholder="Email" name="email" id="email" class="form-control"/>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" value="remember"> Remember me
                    </label>
                </div>

                <input type="submit" name="submit" value="Sign up" class="btn btn-default"/>
            </fieldset>
            </form>
        </div>
    </body>
</html>


