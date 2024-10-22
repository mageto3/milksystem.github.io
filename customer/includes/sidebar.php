<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<?php

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_image = $row_customer['customer_image'];

$customer_name = $row_customer['customer_name'];
$milk_amount = $row_customer['milk_amount'];
$money_paid = $row_customer['money_paid'];
$money_balance = $row_customer['money_balance'];
$payment_method = $row_customer['payment_method'];
$date_of_payment = $row_customer['date_of_payment'];
$transaction_code = $row_customer['transaction_code'];

if(!isset($_SESSION['customer_email'])){


}
else {

echo "

<center>

<img src='customer_images/$customer_image' class='img-responsive'>

</center>

<br>

<h3 align='center' class='panel-title'> Name : $customer_name </h3>
<br>

<h3 align='center' class='panel-title'> Milk delivered (Litres) : $milk_amount </h3>
<br>

<h3 align='center' class='panel-title'> Money Paid (Kshs) : $money_paid </h3>
<br>

<h3 align='center' class='panel-title'> Money Balance (Kshs) : $money_balance </h3>
<br>

<h3 align='center' class='panel-title'> Payment Method : $payment_method </h3>
<br>

<h3 align='center' class='panel-title'> Payment Date : $date_of_payment </h3>
<br>

<h3 align='center' class='panel-title'> Transaction Code : $transaction_code </h3>

";

}

?>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<li class="<?php if(isset($_GET['edit_account'])){ echo "active"; } ?>">

<a href="my_account.php?edit_account"> <i class="fa fa-pencil"></i> Edit Account </a>

</li>

<li class="<?php if(isset($_GET['change_pass'])){ echo "active"; } ?>">

<a href="my_account.php?change_pass"> <i class="fa fa-user"></i> Change Password </a>

</li>

<li class="<?php if(isset($_GET['delete_account'])){ echo "active"; } ?>">

<a href="my_account.php?delete_account"> <i class="fa fa-trash-o"></i> Delete Account </a>

</li>

<li>

<a href="logout.php"> <i class="fa fa-sign-out"></i> Logout </a>

</li>


</ul><!-- nav nav-pills nav-stacked Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default sidebar-menu Ends -->