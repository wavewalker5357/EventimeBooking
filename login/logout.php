<?php

 $past = time() - 100;

 //this makes the time in the past to destroy the cookie

 setcookie('ID_Eventime', 'gone', $past);

 setcookie('Key_Eventime', 'gone', $past);

 header("Location: login.php");

 ?>
