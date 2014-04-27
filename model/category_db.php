<?php
function get_categories() {
    global $db;
    $query = 'SELECT * FROM types
              ORDER BY type_name';
    $result = $db->query($query);
    return $result;
}

function get_category_name($category_id) {
    global $db;
    $query = "SELECT * FROM types
              WHERE type_id = $category_id";
    $category = $db->query($query);
    $category = $category->fetch();
    $category_name = $category['type_name'];
    return $category_name;
}

?>