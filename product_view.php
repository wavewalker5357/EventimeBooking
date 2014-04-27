<?php include '/view/header.php'; ?>
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
            <p><b>Description:</b><?php echo $description; ?></p>
            <p><b>Event Price:</b> $<?php echo $list_price; ?></p>

            <p><b>On coming shows:</b></p>
            <?php foreach ($shows as $show) : ?>
            <table>
            <tr><td><b>Date:</b> <br /><?php echo $show['event_show_date']; ?></td>
            <td><b>Seats available:</b><br /> <?php echo $show['event_show_seats']; ?></td>
            <td><b>Your Price: </b>$<?php echo $list_price; ?>
            <form action="<?php echo '/cart' ?>" method="post">
                <input type="hidden" name="action" value="add" />
                <input type="hidden" name="product_id"
                       value="<?php echo $product_id; ?>" />
                <b>Quantity:</b><br />
                <input id="quantity" type="text" name="quantity" value="1" size="2" /><br />
                <input type="submit" value="Add to Cart" />
            </form>
            </td>
            </td></tr></table>
             <?php endforeach; ?>



        </div>
    </div>
</div>
