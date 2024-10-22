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

// Check if 'id' is set in the URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("No customer ID provided.");
}

// Get customer_id from URL
$customer_id = intval($_GET['id']); // Ensure it's an integer for safety

// Fetch the record
$sql = "SELECT customer_id, milk_amount, money_paid, money_balance, payment_method, date_of_payment, transaction_code, price_per_unit FROM customers WHERE customer_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $customer_id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if (!$row) {
    die("Record not found.");
}

// Display the form
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Record</title>
    <script>
        function calculateMoneyPaid() {
            var milkAmount = parseFloat(document.getElementById('milk_amount').value);
            var pricePerUnit = parseFloat(document.getElementById('price_per_unit').value);
            var moneyPaid = milkAmount * pricePerUnit;
            document.getElementById('money_paid').value = moneyPaid.toFixed(2);
        }
    </script>
</head>
<body>
    <center>
<h1>RECORD MILK DELIVERY</h1>
<form action="update_record.php" method="post" style="border-radius: 2%; background: green;">
    <input type="hidden" name="customer_id" value="<?php echo htmlspecialchars($row['customer_id']); ?>">
    
    <p>Milk Amount: <input type="number" id="milk_amount" name="milk_amount" value="<?php echo htmlspecialchars($row['milk_amount']); ?>" oninput="calculateMoneyPaid()" required></p>
    <p>Price Per Unit: <input type="number" step="0.01" id="price_per_unit" name="price_per_unit" value="<?php echo htmlspecialchars($row['price_per_unit']); ?>" oninput="calculateMoneyPaid()" required></p>
    <p>TOTAL: <input type="number" id="money_paid" name="money_paid" value="<?php echo htmlspecialchars($row['money_paid']); ?>" required readonly></p>
    <p>Money Balance: <input type="number" step="0.01" name="money_balance" value="<?php echo htmlspecialchars($row['money_balance']); ?>" required></p>
    <p>Payment Method: <input type="text" name="payment_method" value="<?php echo htmlspecialchars($row['payment_method']); ?>" required></p>
    <p>Date of Payment: <input type="date" name="date_of_payment" value="<?php echo htmlspecialchars($row['date_of_payment']); ?>" required></p>
    <p>Transaction Code: <textarea name="transaction_code" ><?php echo htmlspecialchars($row['transaction_code']); ?></textarea></p>
    
    <p><input type="submit" value="Update Record"></p>
</form>
</center>
</body>
</html>

<?php
$stmt->close();
$conn->close();
?>
