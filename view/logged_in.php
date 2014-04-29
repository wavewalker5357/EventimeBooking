<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
<?php var_dump($_COOKIE);
var_dump($_SESSION);
?>
 Hey, <a href="?action=member&user_name=<?php echo $_SESSION['user_name']; ?>"><b><?php echo $_SESSION['user_first_name']; ?></b> <b><?php echo $_SESSION['user_last_name']; ?></b></a>.
 You are logged in as:
 <b><?php echo $_SESSION['user_name']; ?></b>
  <b>Address: </b><?php echo $_SESSION['user_home_address']; ?>
<b>Mobile telephone: </b><?php echo $_SESSION['user_mobile_telephone']; ?>
<b>Telephone: </b><?php echo $_SESSION['user_telephone']; ?>
<b>Birth date: </b><?php echo $_SESSION['user_birth']; ?>

<!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
<a href="index.php?logout">Logout</a>
