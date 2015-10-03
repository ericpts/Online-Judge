<?php 
    if(empty($_SESSION))
        session_start();
    require 'bootstrap.php';?>

<html>
<head>
<title> Online Judge </title>
</head>

<link rel="stylesheet" href="css/navigation.css"/>

<script>
    $(document).ready(function() {
        $('.dropdown-toggle').dropdown();
    });
</script>

<div class="navbar navbar-default" role="navigation">
<div class="container-fluid">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navigation-navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/" id="navbar-brand">Online Judge</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-navigation-navbar">
        <ul class="nav navbar-nav">
			<li><a href = "/"> Home </a> </li>
            <li><a href = "arhiva.php"> Arhiva </a> </li>
            <li><a href = "forum.php"> Forum </a> </li>
		</ul> 

        <ul class="nav navbar-nav navbar-right">
<?php if(empty($_SESSION['login'])) {
            ?>
            <li><a href="register.php"><b>Register</b></a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                <ul id="login-dp" class="dropdown-menu">
                    <li>
                        <div class="row">
                            <div class="col-md-12">
                                <?php require 'login_form.php'; ?>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
<?php
}
        else {
            echo "<li><a>Logged in as <b>" . $_SESSION['user'] . "</b></a></li>";
            echo <<<EOT
            <li><a href="logout.php"><i> Logout <i></a></li>";
EOT;

        }
?>
        </ul>
    </div>
</div>
</div>

</html>
