<?php
// get all reservations
function get_products() {
    global $db;
    $query = 'SELECT * FROM events
              ORDER BY event_id';
    $products = $db->query($query);
    return $products;
}
// get all reservations base on event id
function get_products_by_category($category_id) {
    global $db;
    $query = "SELECT * FROM events
              WHERE events.event_type = '$category_id'
              ORDER BY event_id";
    $products = $db->query($query);
    return $products;
}
// get all reservations base on event id
function get_product($product_id) {
    global $db;
    $query = "SELECT * FROM events
              WHERE event_id = '$product_id'";
    $product = $db->query($query);
    $product = $product->fetch();
    return $product;
}

?>