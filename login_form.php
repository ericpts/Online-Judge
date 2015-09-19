<div id = "sidebar">
<?php require 'bootstrap.php'; ?>
<link rel="stylesheet" href="css/login.css">
    <?php
         if (empty($_SESSION['login'])){
            ?>
            <form method = "post"  action = "login.php" class="form-signin">
                <fieldset>
                    <input maxlength="50" placeholder="Username" type="text" name="username" id="username" class="form-control"/>

                    <input maxlength="50" placeholder="Password" type="password" name="password" id="password" class="form-control"/>


                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" value="remember"> Remember me
                        </label>
                    </div>

                    <input type="submit" name="Submit" value="Login" class="btn btn-default"/>

                </fieldset>
            </form>
            <?php
        }
         if (isset ($_SESSION['login']) and $_SESSION['login'] == 1){
            ?>
             <form method = "post" action = "index.php?page=logout">
             <input type = "submit" value = "Logout">
            <?php
        }
        if (isset ($_SESSION['login']) and $_SESSION['login'] == 1){
            echo "Hello " . $_SESSION['user'];
        }
    
        ?>
</div>
