<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Order History & Ratings</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #343a40;
      color: white;
      padding: 30px 0;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    h1 {
      margin: 0;
      font-size: 2em;
    }

    p {
      margin: 10px 0 0;
      font-size: 1em;
    }

    section {
      max-width: 900px;
      margin: 30px auto;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 12px;
      box-shadow: 0 2px 12px rgba(0,0,0,0.1);
    }

    h2 {
      margin-bottom: 20px;
      color: #333;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #007bff;
      color: white;
    }

    tr:hover {
      background-color: #f1f1f1;
    }

    button {
      background-color: #ffc107;
      border: none;
      padding: 8px 14px;
      color: black;
      font-weight: bold;
      border-radius: 6px;
      cursor: pointer;
    }

    button:hover {
      background-color: #e0a800;
    }

    .rating-form form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .rating-form select,
    .rating-form input,
    .rating-form textarea {
      padding: 10px;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-size: 16px;
    }

    .rating-form button {
      background-color: #28a745;
      color: white;
      font-weight: bold;
    }

    .rating-form button:hover {
      background-color: #218838;
    }

    .note {
      font-size: 0.9em;
      color: #555;
    }
  </style>
</head>
<body>
  <header>
    <h1>Order History & Ratings</h1>
    <p>Track your past purchases and share your supplier experience</p>
  </header>

  <!-- Orders Table -->
  <section>
    <h2>Past Orders</h2>
    <table>
      <thead>
        <tr>
          <th>Order ID</th>
          <th>Item</th>
          <th>Quantity</th>
          <th>Date</th>
          <th>Supplier</th>
          <th>Status</th>
          <th>Rate</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $result = $conn->query("SELECT * FROM orders ORDER BY order_date DESC");
        while($row = $result->fetch_assoc()) {
          echo "<tr>
                  <td>#ORD" . $row['id'] . "</td>
                  <td>" . $row['item'] . "</td>
                  <td>" . $row['quantity'] . "</td>
                  <td>" . date('d M Y', strtotime($row['order_date'])) . "</td>
                  <td>" . $row['supplier'] . "</td>
                  <td>" . $row['status'] . "</td>
                  <td><button onclick=\"document.getElementById('supplier').value='{$row['supplier']}'\">Rate</button></td>
                </tr>";
        }
        ?>
      </tbody>
    </table>
  </section>

  <!-- Rating Form -->
  <section>
    <h2>Rate Your Supplier</h2>
    <div class="rating-form">
      <form action="" method="POST">
        <label for="supplier">Supplier Name:</label>
        <select id="supplier" name="supplier" required>
          <?php
          $suppliers = $conn->query("SELECT DISTINCT supplier FROM orders");
          while($s = $suppliers->fetch_assoc()) {
            echo "<option>{$s['supplier']}</option>";
          }
          ?>
        </select>

        <label for="rating">Rating (1 to 5):</label>
        <input type="number" id="rating" name="rating" min="1" max="5" required>

        <label for="feedback">Feedback:</label>
        <textarea id="feedback" name="feedback" rows="4" required></textarea>

        <button type="submit" name="submit_rating">Submit Rating</button>
        <p class="note">Your feedback helps us ensure high quality and trustworthy suppliers.</p>
      </form>
    </div>
  </section>

  <?php
  if (isset($_POST['submit_rating'])) {
    $supplier = $_POST['supplier'];
    $rating = $_POST['rating'];
    $feedback = $_POST['feedback'];

    $stmt = $conn->prepare("INSERT INTO ratings (supplier, rating, feedback) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $supplier, $rating, $feedback);
    $stmt->execute();

    echo "<script>alert('Thank you for your feedback!'); location.href='order-history.php';</script>";
  }
  ?>
</body>
</html> 