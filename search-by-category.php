<?php
    // Database Connection
    require "dbcon.php";

    // Retrieve selected category from form
    $product_category = mysqli_real_escape_string($conn, $_POST['product_category']);

    // Construct MySQL SELECT statement
    $sql = "SELECT * FROM products WHERE product_category='$product_category'";

    // Execute SELECT statement
    $result = mysqli_query($conn, $sql);

    // Check if there are any results
    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        echo '<table>';
        while($row = mysqli_fetch_assoc($result)) { ?>

            <tr>
                <td height="50" width="50">
                    <img src="<?php echo $row['product_image']?>" alt="no image" height="100" width="100"/>
                </td>
                <td style="vertical-align:bottom;text-align:center;">
                    <div>
                        <span style="margin-right: 10px;"><?php echo $row['product_name']?></span>
                        <span>&dollar;<?php echo $row['product_price']?></span>
                    </div>
                </td>
            </tr>

        <?php }
        echo '</table>';
    } else {
        echo "No products found.";
    }

    // Close MySQL connection
    mysqli_close($conn);
