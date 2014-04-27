<?php
function get_shows($product_id) {
    global $db;
    $query = "SELECT * FROM event_show
    WHERE event_show.event_show_events_id = '$product_id'
              ORDER BY event_show_date";
    $shows = $db->query($query);
    return $shows;
}

function get_shows_by_event($product_id) {
    global $db;
    $query = "SELECT * FROM event_show
              WHERE event_show_events_id = '$product_id'
              ORDER BY event_show_date";
    $show = $db->query($query);
    $show = $show->fetch();
    return $show;
}