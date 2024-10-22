<?php
// Database connection parameters
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

// SQL query to fetch data
$sql = "SELECT customer_id, customer_name, customer_email, milk_amount, money_paid, money_balance, payment_method, date_of_payment, transaction_code FROM customers";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmers Lists</title>
</head>
<body>
    <div style="background: ; color: blue; padding-left: 25%; padding-top: 15%; font-weight: 70">
    <center><h1>FARMERS LIST AND PAYMENT REPORT</h1></center>
</div>
    <div style="position: center; background: ; color: blue; padding-left: 12%; padding-top: 3%;">
    <table border="1.5"; >
        <tr>
            <th>Farmers Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Milk Amount</th>
            <th>Total</th>
            <th>Money Balance</th>
            <th>Payment Method</th>
            <th>Date of payment</th>
            <th>Transaction code</th>
            
        </tr>
    
        <?php
        // Check if there are results
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["customer_id"] . "</td>";
                echo "<td>" . $row["customer_name"] . "</td>";
                echo "<td>" . $row["customer_email"] . "</td>";
                echo "<td>" . $row ["milk_amount"]; 
                 echo "<td>" . $row ["money_paid"];
                 echo "<td>" . $row ["money_balance"];
                 echo "<td>" . $row ["payment_method"];
                  echo "<td>" . $row ["date_of_payment"];
                  echo "<td>" . $row ["transaction_code"];
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No results found</td></tr>";
        }
        // Close connection
        $conn->close();
        ?>
    </table>
    </div>
  </body>
  </html>