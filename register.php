<?php
    require 'navigation.php';
    require 'db.php';
    require 'db_specs.php';

    function check_length($name, $val, &$ok) {
    
        eval(sprintf("global \$max_%s_length;", $name));

        $str = <<<EOT
        if(strlen("%s") >= \$max_%s_length) {
            echo "%s is too long<br><br>";
            \$ok = 0;
        }
EOT;

        $instruction = sprintf($str, $val, $name, $name);

        eval($instruction);
    }

    if (isset ($_POST['submit'])){
        $username = sanitize_post('username');
        $password = sanitize_post('password');
        $email = sanitize_post('email');


        $ok = 1;
        check_length('username', $username, $ok);
        check_length('password', $password, $ok);
        check_length('email', $email, $ok);

        
        if ($ok){
            add_user($username, $password, $email);
       
    ?>
    <p style = "font-size: 25px; color: red"> Registered successfully </p>
<html>
<?php
        }
    }
?>

<?php require 'bootstrap.php'; ?>

    <body>
        <div class="container-fluid">
            <form method="post" action="register.php" class="form-signup">
            <fieldset>
                <input type="text" maxlength="50" placeholder="Username" name="username" id="username" class="form-control"/>
                <input type="password" maxlength="50" placeholder="Password" name="password" id="password" class="form-control"/>
                <input type="text" maxlength="50" placeholder="Email" name="email" id="email" class="form-control"/>
                <br>
                <input type="submit" name="submit" value="Sign up" class="btn btn-default"/>
            </fieldset>
            </form>
        </div>
    </body>
</html>


