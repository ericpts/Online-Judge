<?php
    if (isset ($_SESSION['login']) and $_SESSION['login'] == 1){
         echo "Hello " . $_SESSION['user'];
    }
    else{
        echo "Hello";
    }
?>
