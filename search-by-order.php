<?php
// Database Connection
require "dbcon.php";

// Retrieve selected category from form
$order = mysqli_real_escape_string($conn, $_POST['order']);

// Construct MySQL SELECT statement
$sql = "SELECT * FROM products ORDER BY $order";

// Execute SELECT statement
$result = mysqli_query($conn, $sql);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Product Name: " . $row["product_name"]. " - Price: " . $row["product_price"]. "<br>";
    }
} else {
    echo "No products found.";
}

// Close MySQL connection
mysqli_close($conn);
