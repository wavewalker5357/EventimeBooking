<?php
var_dump('', $_COOKIE, '');
 $past = time() - 100;

 setcookie('ID_Eventime', 'gone', $past, '/');
 setcookie('Key_Eventime', 'gone', $past, '/');


 header("Location: ../index.php");

 ?>
