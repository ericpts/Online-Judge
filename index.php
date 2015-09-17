<?php
	session_start ();
	require ("connection.php");

	if (isset ($_GET['page'])){
        $pages = array ("home", "arhiva", "login", "logout", "forum", "register");
		
		if (in_array ($_GET['page'], $pages)){
			$_page = $_GET['page'];
		}
		else{
			$_page = "home";
		}
	}
	else{
		$_page = "home";
	}
	
?>

<html>
<head>
	<link rel="stylesheet" href="css/main.css" /> 
	
	<h1 id = "titlu"> Online Judge </h1>
	
	<title> Online Judge </title>
</head>

<body>

<div id = "toplist">
		<ul id = "mylist">
			<li><a href = "index.php?page=home"> Home </a> </li>
            <li><a href = "index.php?page=arhiva"> Arhiva </a> </li>
            <li><a href = "index.php?page=forum"> Forum </a> </li>
		</ul> 
</div>

<div id = "container">
	<div id = "main">
		<?php require ($_page . ".php"); ?>
	</div>
	
    <div id = "sidebar">
        <?php
             if (!isset ($_SESSION['login']) or $_SESSION['login'] == 0){
                ?>
                <form method = "post"  action = "index.php?page=login">
                Username <input type = "text" name = "username"><br>
                Password <input type = "password" name = "password"><br>
                <input type = "submit" value = "Login">
                </form>
                <a href = "index.php?page=register" id = "register"> N-ai cont? </a>
                <?php
            }
             if (isset ($_SESSION['login']) and $_SESSION['login'] == 1){
                ?>
                 <form method = "post" action = "index.php?page=logout">
                 <input type = "submit" value = "Logout">
                <?php
            }
            ?>
	</div>

</div>
<img src = "img/circuit.jpg" class = "circuit" style = "pull-right">
</body>
</html>
