<?php require 'navigation.php'; ?>
<?php
echo "Suntem in arhiva";
?>
<html>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>

<body>
	<h1>Lists of problems</h1>

	<div class="container">
		
		<input type="search" id="mySearch" placeholder="Search for problem..">

		<button onclick="myFunction()">Search</button>

		<p id="demo"></p>

	<script>
	function myFunction() {
    		var x = document.getElementById("mySearch").placeholder;
   		 document.getElementById("demo").innerHTML = x;
	}
	</script>
	
	<pre >
		<a href="sum.php" >sum</a>
		<a href="#" >Problema2</a>
	</pre>

	</div>
</body>
</html>

