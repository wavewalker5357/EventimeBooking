<?php include '/header.php'; ?>
<?php var_dump($_COOKIE);
var_dump($_SESSION);
?>



        <h1>Member Area</h1>
        <div id="left_column">
            <p>

 You are logged in as:
 <b><?php echo $_SESSION['user_name']; ?></b>
  <b>Address: </b><?php echo $_SESSION['user_home_address']; ?>
<b>Mobile telephone: </b><?php echo $_SESSION['user_mobile_telephone']; ?>
<b>Telephone: </b><?php echo $_SESSION['user_telephone']; ?>
<b>Birth date: </b><?php echo $_SESSION['user_birth']; ?>
            </p>
        </div>

        <div id="right_column">
Information about account:
Username: <?php echo $_SESSION['user_name']; ?>
        </div>
    </div>
</div>





<!-- backlink -->
<a href="index.php">Back to Main Page</a>
