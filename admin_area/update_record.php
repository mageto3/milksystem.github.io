<?php
// Database credentials
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

// Get data from the form
if (!isset($_POST['customer_id']) || !isset($_POST['milk_amount']) || !isset($_POST['money_paid']) || !isset($_POST['money_balance']) || !isset($_POST['payment_method']) || !isset($_POST['date_of_payment']) || !isset($_POST['transaction_code']) || !isset($_POST['price_per_unit'])) {
    die("Invalid form submission.");
}

$customer_id = intval($_POST['customer_id']); // Ensure it's an integer for safety
$milk_amount = intval($_POST['milk_amount']); // Ensure it's an integer
$money_paid = floatval($_POST['money_paid']); // Ensure it's a float
$money_balance = floatval($_POST['money_balance']); // Ensure it's a float
$payment_method = $_POST['payment_method'];
$date_of_payment = $_POST['date_of_payment'];
$transaction_code = $_POST['transaction_code']; // Handle as text
$price_per_unit = floatval($_POST['price_per_unit']); // Handle as float

// Prepare and bind
$stmt = $conn->prepare("UPDATE customers SET milk_amount = ?, money_paid = ?, money_balance = ?, payment_method = ?, date_of_payment = ?, transaction_code = ?, price_per_unit = ? WHERE customer_id = ?");
$stmt->bind_param("idddssdi", $milk_amount, $money_paid, $money_balance, $payment_method, $date_of_payment, $transaction_code, $price_per_unit, $customer_id);

// Execute the statement
if ($stmt->execute()) {
    echo "Record updated successfully. <a href='index.php?insert_product'>Back to Search</a>";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
