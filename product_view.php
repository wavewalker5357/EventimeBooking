<?php include '/view/header.php'; ?>
<?php var_dump($_COOKIE);
var_dump($_SESSION);
?>
<div id="main">
    <div id="sidebar">
        <h1>By type:</h1>
        <ul class="nav">
            <!-- display links for all categories -->
            <?php foreach($categories as $category) : ?>
            <li>
                <a href="?category_id=<?php echo $category['type_id']; ?>">
                    <?php echo $category['type_name']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div id="content">


        <h1><?php echo $name; ?></h1>
        <div id="left_column">
            <p>
                <img src="<?php echo $image_filename; ?>"
                    alt="<?php echo $image_alt; ?>" />
            </p>
        </div>

        <div id="right_column">
            <p><strong>Description:</strong><?php echo $description; ?></p>
            <p><strong>Event Price:</strong> $<?php echo $list_price; ?></p>

            <p><strong>On coming shows:</strong></p>
            <?php foreach ($shows as $show) : ?>
            <table>
            <tr><td><strong>Date:</strong> <br /><?php echo $show['event_show_date']; ?></td>
            <td><strong>Seats available:</strong><br /> <?php echo $show['event_show_seats']; ?></td>
            <td><strong>ID:</strong><br /> <?php echo $show['event_show_id']; ?></td>
            <td><strong>Your Price: </strong>$<?php echo $list_price; ?>
            <form action="./cart/index.php" method="POST">
                <input type="hidden" name="action" value="add" />
                <input type="hidden" name="event_show_id" value="<?php echo $show['event_show_id']; ?>" />
                <strong>Quantity:</strong><br />
                <input id="quantity" type="text" name="quantity" value="1" size="2" /><br />

                <input type="submit" value="Add to Cart" />
            </form>
            </td>
            </td></tr></table>
             <?php endforeach; ?>



        </div>
    </div>
</div>
