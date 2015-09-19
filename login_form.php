<?php require 'bootstrap.php'; ?>
<link rel="stylesheet" href="css/login.css">
<div class="container-fluid">
    <form method = "post"  action = "login.php" class="form-signin">
        <fieldset>
            <input maxlength="50" placeholder="Username" type="text" name="username" id="username" class="form-control"/>

            <input maxlength="50" placeholder="Password" type="password" name="password" id="password" class="form-control"/>


            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" value="remember"> Remember me
                </label>
            </div>

            <input type="submit" name="submit" value="Login" class="btn btn-default"/>

        </fieldset>
    </form>
</div>
