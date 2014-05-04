<div id="main">
    <p><?php include("login/index.php"); ?></p>
</div>

<?php
require('model/database.php');
require('model/product_db.php');
require('model/category_db.php');
require ('model/show_db.php');
require ('model/reservation_db.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_products';
}

// view list of products by category id
if ($action == 'list_products') {

    $category_id = "";
    if (isset($_GET['category_id'])) {
        $category_id = $_GET['category_id'];
    } else {
        $category_id = 1;
    }

    $categories = get_categories();
    $category_name = get_category_name($category_id);
    $products = get_products_by_category($category_id);

    include('product_list.php');
//    view product view by selected product
} else if ($action == 'view_product') {

    $categories = get_categories();

    $product_id = $_GET['product_id'];
    $product = get_product($product_id);

    // Get product data
    $description = $product['event_description'];
    $name = $product['event_title'];
    $list_price = $product['event_price'];

//  Get shows data
    $shows = get_shows($product_id);
    $show = get_shows_by_event($product_id);

    $show_date = $show['event_show_date'];
    $seats = $show['event_show_seats'];

    $image_filename = './images/' . $product_id . '.jpg';
    $image_alt = 'Image: ' . $name . '.jpg';
    include('product_view.php');
//    view member are if user clicks on link
} elseif ($action == 'member') {

    $category_id = "";
    if (isset($_GET['category_id'])) {
        $category_id = $_GET['category_id'];
    } else {
        $category_id = 1;
    }

    $categories = get_categories();
    $category_name = get_category_name($category_id);
    $products = get_products_by_category($category_id);

    $user_name = $_SESSION['user_name'];
    $user_email = $_SESSION['user_email'];
    $user_first_name = $_SESSION['user_first_name'];
    $user_last_name = $_SESSION['user_last_name'];
    $user_home_address = $_SESSION['user_home_address'];
    $user_mobile_telephone = $_SESSION['user_mobile_telephone'];
    $user_telephone = $_SESSION['user_telephone'];
    $user_birth = $_SESSION['user_birth'];

//    get reservations by user name
    $reservation_name = get_reservation_name($user_name);

    include '/view/member.php';
}
?>
<?php include '/view/footer.php'; ?>
