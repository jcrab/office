<?php
// TODO: Save selected items into a shopping cart (array)
// which is saved in the session.

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Select an item to add to your cart:</h2>
        <ul>
            <!-- TODO: replace hard-coded items with those from db -->
            <li><a href="index.php">milk</a></li>
            <li><a href="index.php">bread</a></li>
            <li><a href="index.php">eggs</a></li>
        </ul>
            
        <hr/>
        <p>Cart Contents</p>
        <?php
        // TODO: display the cart contents
        ?>
        <a href='admin_menu.php'>Administrator Menu</a>
    </body>
</html>
