<!-- Login data taken from the session -->
<p id="login_form">Hey, <b><a href="?action=member&user_name=<?php echo $_SESSION['user_name']; ?>"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['user_first_name']; ?></b> <b><?php echo $_SESSION['user_last_name']; ?></button>
</b></a>
 You are logged in as:
 <b><?php echo $_SESSION['user_name']; ?></b>

<a href="index.php?logout"><button type="button" class="btn btn-warning">Logout</button></a></p>
