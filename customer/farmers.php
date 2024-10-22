<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecom_store";

include("includes/db.php");
include("includes/header.php");


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
</head>
<body>

  <header class="page-header">
    <!-- topline -->
    <div class="page-header__topline">
      <div class="container clearfix">

        <div class="currency">
          <a class="currency__change" href="my_account.php?my_orders">
          <?php
          if(!isset($_SESSION['customer_email'])){
          echo "Welcome :Guest"; 
         } 
          else
          { 
              echo "Welcome : " . $_SESSION['customer_email'] . "";
            }
?>

          <li class="login__item">
          <?php
          if(!isset($_SESSION['customer_email'])){
            echo '<a href="./customer_login.php" class="login__link">Sign In</a>';
          } 
            else
            { 
                echo '<a href="../logout.php" class="login__link">Log out</a>';
            }   
?>  
            
          </li>
        </ul>
      </div>
    </div>
    <center><b><h1 style="background: blue; color: white">Kajiado milk collection management system</h1></b></center>
    <!-- bottomline -->
    <div class="page-header__bottomline">
      <div class="container clearfix">


        <nav class="main-nav">
          <ul class="categories">

            <li class="categories__item">
              <a class="categories__link" href="#">
                HOME
                <i class="icon-down-open-1"></i>
              </a>
              </li>
           

          <li class="categories__item">
              <a class="categories__link" href="#">
                My Account
                <i class="icon-down-open-1"></i>
              </a>
              <div class="dropdown dropdown--lookbook">
                <div class="clearfix">
                  <div class="dropdown__half">
                    <div class="dropdown__heading">My account</div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">My Applications</a>
                      </li>
                    </ul>
                  </div>
              </div>

            </li>

          </ul>
        </nav>
      </div>
    </div>
  </header>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmers Lists</title>
</head>
<body>
    <div style="background: ; color: red; padding-left: 25%; padding-top: 15%; font-weight: 70">
    <center><h1>Farmers Lists and payment Records</h1></center>
</div>
<center><p>NOTE: If you can't see your transactions, please contact support by sending a complain</p></center>
    <div style="position: center; background: ; color: blue; padding-left: 12%; padding-top: 3%;">
    <table border="1.5"; >
        <tr>
            <th>Farmers Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Milk amount</th>
            <th>TOTAL</th>
            <th>Money Balance</th>
            <th>Payment method</th>
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
     <!-- FOOTER -->
    <footer class="page-footer">

      <div class="footer-nav">
        <div class="container clearfix">

          <div class="footer-nav__col footer-nav__col--info">
            <div class="footer-nav__heading">Information</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">The company</a>
              </li>
             
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Service</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Privacy &amp; cookies</a>
              </li>
            </ul>
          </div>

          
          <div class="footer-nav__col footer-nav__col--account">
            <div class="footer-nav__heading">Your account</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Sign in</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Register</a>
              </li>
             
            </ul>
          </div>


          <div class="footer-nav__col footer-nav__col--contacts">
            <div class="footer-nav__heading">Contact details</div>
            <address class="address">
          </address>
            <div class="phone">
              Telephone:
              <a class="phone__number" href="tel:0123456789">0123-456-789</a>
            </div>
            <div class="email">
              Email:
              <a href="mailto:support@yourwebsite.com" class="email__addr">support@admin.com</a>
            </div>
          </div>

        </div>
      </div>

      <!-- <div class="banners">
        <div class="container clearfix">

          <div class="banner-award">
            <span>Award winner</span><br> Fashion awards 2016
          </div>

          <div class="banner-social">
            <a href="#" class="banner-social__link">
            <i class="icon-facebook"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-twitter"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-instagram"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-pinterest-circled"></i>
          </a>
          </div>

        </div>
      </div> -->

      <div class="page-footer__subline">
        <div class="container clearfix">

          <div class="developer">
           Kajiado Milk Collection and Billing Management system
          </div>

          <div class="designby">
            Designed by:Flavian Mageto.
            Email:flavianmageto26@gmail.com
          </div>

        </div>
      </div>
    </footer>
</body>

</html>

</body>
</html>