<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <!-- the head section -->
    <head>
        <title>Eventime Booking: Book today, enjoy tomorrow!</title>
        <link rel="stylesheet" type="text/css" href="../style/main.css" />
    </head>

    <!-- the body section -->
    <body>
        <div id="page">
            <div id="header">
                <h1><a href="../index.php">Eventime Booking</a></h1>
            </div>


            <div id="main">
                <div id="sidebar">
                    <h1>Reservations: </h1>
                </div>
                <div id="content">
                    <p>

                        <?php
                        require('../model/database.php');
                        require('../model/reservation_db.php');
                        $GLOBALS['message'] = "";

                        if (isset($_POST['action'])) {
                            $action = $_POST['action'];
                        } else {

                            $message = "Error: there is no action used.";
                        }

                        if ($action == 'add') {
//                            add new reservation based on form data by calling a sql query function
                            $cart_event_name = $_POST['event_name'];
                            $cart_event_id = $_POST['event_id'];
                            $cart_show_event_id = $_POST['event_show_id'];
                            $cart_show_event_seats = $_POST['quantity'];
                            $cart_reservation_made_time = date("Y-m-d H:i:s");
                            $cart_reservation_price = $_POST['event_show_price'];
                            $cart_event_show_member = $_POST['event_show_member'];
                            $cart_show_seats_reserved = $_POST['event_show_seats'] - $_POST['quantity'];

                            if ($_POST['quantity'] > $_POST['event_show_seats']) {
                                echo $message = "Error: you cannot reserve more seats than there are avilable.<br />" . "You will be redirected back in <strong>5</strong> seconds";

                                $url = $_SERVER['HTTP_REFERER']; // right back to the referrer page from where you came.
                                echo '<meta http-equiv="refresh" content="5;URL=' . $url . '">';
                                exit();
                            } else {
                                $reservations = add_reservation($cart_event_id, $cart_show_event_seats, $cart_reservation_made_time, $cart_show_event_id, $cart_reservation_price, $cart_event_show_member, $cart_show_seats_reserved);

// $show_seats = delete_reserved_seats($cart_show_seats_reserved);
                                $message = "<strong>" . $cart_show_event_seats . "</strong>" . " ticket(s) for " . "<strong>" . $cart_event_name . "</strong>" . " were added to your reservations.<br />" . "You will be redirected back in <strong>5</strong> seconds ";

                                $url = $_SERVER['HTTP_REFERER']; // right back to the referrer page from where you came.
                                echo '<meta http-equiv="refresh" content="5;URL=' . $url . '">';
                            }
                        } elseif ($action == 'delete') {
//                            deletes reservations based on form data by sql query function
                            $cart_delete_reservation_title = $_POST['cart_delete_reservation_title'];
                            $cart_delete_reservation_id = $_POST['cart_delete_reservation_id'];
                            $cart_delete_show_seats = $_POST['cart_delete_show_seats'];
                            $cart_delete_reservation_seats = $cart_delete_show_seats + $_POST['cart_delete_reservation_seats'];
                            $cart_delete_show_id = $_POST['cart_delete_show_id'];
                            $reservation_delete = delete_reservation($cart_delete_reservation_id, $cart_delete_reservation_seats, $cart_delete_show_id);
                            $message = "Your reservation " . "<strong>EV201400" . $cart_delete_reservation_id . "</strong> for " . "<strong>" . $cart_delete_reservation_title . "</strong>" . " was deleted.<br />" . "You will be redirected back in <strong>5</strong> seconds ";

                            $url = $_SERVER['HTTP_REFERER']; // right back to the referrer page from where you came.
                            echo '<meta http-equiv="refresh" content="5;URL=' . $url . '">';
                        }
                        echo $GLOBALS['message'];
                        ?>
                    </p>

                </div>
            </div>
        </div>






