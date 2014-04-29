<?php include '../view/header.php';
require('../model/database.php');
require('../model/reservation_db.php');
$message = "";


if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else {
    echo "Error: there is no action used.";
}

if ($action == 'add') {
$cart_event_name = $_POST['event_name'];
$cart_event_id = $_POST['event_id'];
$cart_show_event_id = $_POST['event_show_id'];
$cart_show_event_seats = $_POST['quantity'];
$cart_reservation_made_time = date("Y-m-d H:i:s");
$cart_reservation_price = $_POST['event_show_price'];
$cart_event_show_member = $_POST['event_show_member'];
$reservations = add_reservation($cart_event_id, $cart_show_event_seats, $cart_reservation_made_time, $cart_show_event_id, $cart_reservation_price, $cart_event_show_member);
echo $cart_show_event_seats . " ticket(s) for " . $cart_event_name . " were added to your reservations.";

} elseif ($action == 'delete') {
$cart_delete_reservation_title = $_POST['cart_delete_reservation_title'];
$cart_delete_reservation_id = $_POST['cart_delete_reservation_id'];
$reservation_delete = delete_reservation($cart_delete_reservation_id);
echo "Your reservation " . "EV201400" . $cart_delete_reservation_id . " for " . $cart_delete_reservation_title . " was deleted.";
}
?>

<div id="main">
    <h1 class="top">Shopping Cart - under construction</h1>

</div>

<?php include '../view/footer.php'; ?>
