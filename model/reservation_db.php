<?php
// get all products
function get_reservations() {
    global $db;
    $query = 'SELECT * FROM reservations
              ORDER BY reservation_id';
    $result = $db->query($query);
    return $result;
}
// get reservation info from reservations, events and event_show tables based on user name
function get_reservation_name($user_name) {
    global $db;
    $query = "SELECT m.member_name, m.member_email, m.member_password, m.member_first_name, m.member_last_name, m.member_home_address, m.member_mobile_telephone, m.member_telephone, m.member_birth, r.reservation_id, r.reservation_event_id,r.reservation_reserved_seats, e.event_title, s.event_show_date, e.event_price, s.event_show_seats
                FROM members AS m
                     LEFT JOIN reservations AS r ON r.reservation_member_name = m.member_name
                     LEFT JOIN events AS e ON e.event_id = r.reservation_event_id
                     LEFT JOIN event_show AS s ON s.event_show_id = r.reservation_event_show_id
                WHERE member_name =  '$user_name'";
    $reservations = $db->query($query);
    return $reservations;
}
// delete reservation on reservetion id
function delete_reservation($cart_delete_reservation_id, $cart_delete_reservation_seats, $cart_delete_show_id) {
    global $db;
    $query = "DELETE FROM reservations
              WHERE reservation_id = '$cart_delete_reservation_id';
UPDATE `reservation_sys`.`event_show` SET  `event_show_seats` = '$cart_delete_reservation_seats' WHERE `event_show`.`event_show_id` ='$cart_delete_show_id'
              ";
    $db->exec($query);
}
// add new reservation
function add_reservation($cart_event_id, $cart_show_event_seats, $cart_reservation_made_time, $cart_show_event_id, $cart_reservation_price, $cart_event_show_member, $cart_show_seats_reserved) {
    global $db;
    $query = "INSERT INTO reservations
                 (reservation_event_id, reservation_reserved_seats, reservation_made_time, reservation_event_show_id, reservation_price, reservation_member_name)
              VALUES
                 ('$cart_event_id', '$cart_show_event_seats', '$cart_reservation_made_time', '$cart_show_event_id', '$cart_reservation_price', '$cart_event_show_member');
                 UPDATE `reservation_sys`.`event_show` SET  `event_show_seats` = '$cart_show_seats_reserved' WHERE `event_show`.`event_show_id` ='$cart_show_event_id'";
    $db->exec($query);
}

?>