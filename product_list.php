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



        <h1><?php echo $category_name; ?></h1>
        <ul class="nav">
            <!-- display all producs of selected category -->
            <?php foreach ($products as $product) : ?>
                <li>
                    <div class="jumbotron">
                        <h1><a href="?action=view_product&product_id=<?php echo $product['event_id']; ?>">
                                <?php echo $product['event_title']; ?>
                            </a></h1>
                        <p><?php echo $product['event_description']; ?></p>
                        <p><a href="?action=view_product&product_id=<?php echo $product['event_id']; ?>" class="btn btn-primary btn-lg" role="button">View more</a></p>
                    </div>

                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
