<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecom_store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$milk_amount = $_POST['milk_amount'];
$money_paid = $_POST['money_paid'];
$money_balance = $_POST['money_balance'];
$payment_method = $_POST['payment_method'];
$date_of_payment = $_POST['date_of_payment'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO customer (milk_amount, money_paid, money_balance, payment_method, date_of_payment) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("issss", $milk_amount, $money_paid, $money_balance, $email, $phone_number);

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Customer Data</title>
</head>
<body>
    <h1>Insert Customer Data</h1>
    <form action="insert.php" method="post">
        <label for="customer_id">Customer ID:</label>
        <input type="text" id="customer_id" name="customer_id" required><br><br>
        
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>
        
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>