<?php include '/view/header.php'; ?>

<div id="main">
    <div id="sidebar">
        <h1>Events</h1>
        <ul class="nav">
            <!-- display links for all categories -->
            <?php foreach ($categories as $category) : ?>
                <li>
                    <a href="?category_id=<?php echo $category['type_id']; ?>">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <?php echo $category['type_name']; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div id="content">

        <!-- display detail of selected product -->
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

        </div>
        <div id="bottom_column">
            <p><strong>On coming shows:</strong></p>
            <?php foreach ($shows as $show) : ?>
                <table class="table table-striped table-hover">
                    <tr><td><strong>Date:</strong> <br /><?php echo $show['event_show_date']; ?></td>
                    <tr><td><strong>Place:</strong></br /><?php echo $show['event_show_place']; ?></td>
                        <td><strong>Seats available:</strong><br /> <?php echo $show['event_show_seats']; ?></td>
                        <td><strong>Price: </strong>$<?php echo $list_price; ?>
                            <form action="./cart/index.php" method="POST">
                                <input type="hidden" name="action" value="add" />
                                <input type="hidden" name="event_name" value="<?php echo $name; ?>" />
                                <input type="hidden" name="event_id" value="<?php echo $product_id; ?>" />
                                <input type="hidden" name="event_show_id" value="<?php echo $show['event_show_id']; ?>" />
                                <input type="hidden" name="event_show_price" value="<?php echo $list_price; ?>" />
                                <input type="hidden" name="event_show_seats" value="<?php echo $show['event_show_seats']; ?>" />
                                <?php if (!empty($_SESSION['user_name'])) { ?>
                                    <input type="hidden" name="event_show_member" value="<?php echo $_SESSION['user_name']; ?>" />
                                <?php } ?>

                                <?php if (!empty($_SESSION['user_name'])) { ?>
                            </td><td>
                                <strong>Quantity:</strong><br />
                                <input id="quantity" type="text" name="quantity" value="1" size="2" pattern="[0-9]{1,6}"/><br />
                                <input type="submit" value="Reserve" class="btn btn-success"/>
                            <?php } ?>
                            </form>
                        </td>
                        </td></tr></table>
            <?php endforeach; ?>

        </div>
    </div>
</div>
