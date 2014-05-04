
<?php
include '/header.php';
?>

<div id="main">
    <div id="sidebar">
        <h1>Reservations</h1>

        <ul class="nav">

            <?php
//            iterate though all reservations and select the one with the apropriate reservation id selected
            foreach ($reservation_name as $reservation) :
//                check if reservation exists
                if (isset($reservation['event_title'])) {
                    ?>
                    <div class="panel panel-success">
                        <div class="panel-heading"><strong>Reservation Number:</strong> EV201400<?php echo $reservation['reservation_id']; ?></div>
                        <div class="panel-body">
                            <li>
                                <strong>Event:</strong> <?php echo $reservation['event_title']; ?><br />
                                <strong>Date:</strong> <?php echo $reservation['event_show_date']; ?><br />
                                <strong>Tickets:</strong> <?php echo $reservation['reservation_reserved_seats']; ?><br />
                                <strong>Ticket price:</strong><?php echo "$" . $reservation['event_price']; ?><br />
                                <strong>Subtotal:</strong> <?php echo "$" . ($reservation['event_price'] * $reservation['reservation_reserved_seats']); ?><br />
                                <strong>Total:</strong> <?php echo "$" . (($reservation['event_price'] * $reservation['reservation_reserved_seats']) * 1.2) . "(20% tax included)"; ?><br />
                                <form action="./cart/index.php" method="POST">
                                    <input type="hidden" name="action" value="delete" />
                                    <input type="hidden" name="cart_delete_reservation_id" value="<?php echo $reservation['reservation_id']; ?>" />
                                    <input type="hidden" name="cart_delete_show_id" value="<?php echo $reservation['reservation_event_id']; ?>" />
                                    <input type="hidden" name="cart_delete_reservation_seats" value="<?php echo $reservation['reservation_reserved_seats']; ?>" />
                                    <input type="hidden" name="cart_delete_show_seats" value="<?php echo $reservation['event_show_seats']; ?>" />
                                    <input type="hidden" name="cart_delete_reservation_title" value="<?php echo $reservation['event_title']; ?>" />
                                    <input type="submit" value="Delete" class="btn btn-danger"/>
                            </li>
                        </div>
                    </div>
                <?php
//                if reservation does not exists
                } else {
                    echo "No reservations, yet.";
                }
            endforeach;
            ?>

        </ul>
    </div>
    <div id="content">

        <h1>Member area</h1>
        <ul class="nav">
            <div class="panel panel-warning">
                <div class="panel-heading"><b><?php echo $_SESSION['user_name']; ?></b></div>
                <div class="panel-body">
                    <b>Address: </b><?php echo $_SESSION['user_home_address']; ?><br />
                    <b>Mobile telephone: </b><?php echo $_SESSION['user_mobile_telephone']; ?><br />
                    <b>Telephone: </b><?php echo $_SESSION['user_telephone']; ?><br />
                    <b>Birth date: </b><?php echo $_SESSION['user_birth']; ?><br />
                </div>
            </div>
        </ul>
    </div>
</div>
<br />
<!-- backlink -->
<button type="button" class="btn btn-default"><a href="index.php">Back to Main Page</a></button>
