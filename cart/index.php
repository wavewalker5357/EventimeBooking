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
$cart_show_event_id = $_POST['event_show_id'];
$cart_show_event_seats = $_POST['quantity'];
$cart_reservation_made_time = date("Y-m-d H:i:s");
$reservations = add_reservation($cart_show_event_seats, $cart_reservation_made_time, $cart_show_event_id);


} elseif ($action == 'delete') {
$cart_delete_reservation_id = $_POST['cart_delete_reservation_id'];
$reservation_delete = delete_reservation($cart_delete_reservation_id);
}


?>

<div id="main">
    <h1 class="top">Shopping Cart - under construction</h1>

</div>

<?php include '../view/footer.php'; ?>
