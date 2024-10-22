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
$sql = "SELECT customer_id, milk_amount, customer_name, customer_email FROM customers WHERE customer_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $customer_id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if (!$row) {
    die("Record not found.");
}

// Display the record and provide a link to update it
?>
<!DOCTYPE html>
<html>
<head>
    <title>Customer Details</title>
</head>
<body>
	<center>
		<h1>Farmer Details</h1>
		<form style="border-radius: 2%; border-color: red; background: green; color: white;">

<p><strong>Farmer ID:</strong> <?php echo htmlspecialchars($row['customer_id']); ?></p>
<p><strong>Farmer Name:</strong> <?php echo htmlspecialchars($row['customer_name']); ?></p>
<p><strong>farmer email:</strong> <?php echo htmlspecialchars($row['customer_email']); ?></p>
 <button style="color: white; background: red;"><a href="edit_form.php?id=<?php echo htmlspecialchars($row['customer_id']); ?>">Edit Record</a></button>
 </form>
</center>
</body>
</html>

<?php
$stmt->close();
$conn->close();
?>
