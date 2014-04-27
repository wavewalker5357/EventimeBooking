<?php
function get_products() {
    global $db;
    $query = 'SELECT * FROM events
              ORDER BY event_id';
    $products = $db->query($query);
    return $products;
}

function get_products_by_category($category_id) {
    global $db;
    $query = "SELECT * FROM events
              WHERE events.event_type = '$category_id'
              ORDER BY event_id";
    $products = $db->query($query);
    return $products;
}

function get_product($product_id) {
    global $db;
    $query = "SELECT * FROM events
              WHERE event_id = '$product_id'";
    $product = $db->query($query);
    $product = $product->fetch();
    return $product;
}

function delete_product($product_id) {
    global $db;
    $query = "DELETE FROM events
              WHERE event_id = '$product_id'";
    $db->exec($query);
}

function add_product($category_id, $code, $name, $price) {
    global $db;
    $query = "INSERT INTO events
                 (type_id, event_description, event_title, event_price)
              VALUES
                 ('$category_id', '$code', '$name', '$price')";
    $db->exec($query);
}
?>