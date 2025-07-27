<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST['product_name'];
    $quantity = $_POST['quantity'];
    // $address = $_POST['address'];  // REMOVE
    // $notes = $_POST['notes'];      // REMOVE
    $supplier = "Supplier XYZ";
    $status = "Pending";

    $stmt = $conn->prepare("INSERT INTO orders (item, quantity, order_date, supplier, status)
                            VALUES (?, ?, NOW(), ?, ?)");

    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("siss", $product, $quantity, $supplier, $status);
    $stmt->execute();

    header("Location: order-history.php");
    exit();
}
