<?php

session_start();

if(!isset($_SESSION['customer_email'])){

echo "<script>window.open('../checkout.php','_self')</script>";


}else {

include("includes/db.php");
include("../includes/header.php");
include("functions/functions.php");
include("includes/main.php");
include("includes/footer.php")


?>

<div id="content" ><!-- content Starts -->

 

<div class="col-md-12"><!-- col-md-12 Starts -->


<div class="alert alert-danger"><!-- alert alert-danger Starts -->
We are grateful 


<a href="my_account.php?send_email" class="alert-link">

for your continued support!
</a>

</div><!-- alert alert-danger Ends -->

<?php } ?>

</div><!-- col-md-12 Ends -->

<div class="col-md-3"><!-- col-md-3 Starts -->

<?php include("includes/sidebar.php"); ?>

</div><!-- col-md-3 Ends -->

<div class="col-md-9" ><!--- col-md-9 Starts -->

<div class="box" ><!-- box Starts -->

<?php


if(isset($_GET['edit_account'])) {

include("edit_account.php");

}

if(isset($_GET['change_pass'])){

include("change_pass.php");

}

if(isset($_GET['delete_account'])){

include("delete_account.php");

}

?>

</div><!-- box Ends -->


</div><!--- col-md-9 Ends -->

</div><!-- container Ends -->
</div><!-- content Ends -->
<div style="background: ; color: blue; padding-left: 50%; padding-top: 40%;">
	<button>
  <a href="">REFRESH PAGE</a>
  </button>
  	<button>
  <a href="./details.php">file a complain</a>
  </button>
</div>
 <!-- FOOTER -->
    <footer class="page-footer">

      <div class="footer-nav">
        <div class="container clearfix">

          <div class="footer-nav__col footer-nav__col--info">
            <div class="footer-nav__heading">Information</div>
            <ul class="footer-nav__list">
             
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
              <a href="mailto:support@gmail.com" class="email__addr">support@milk_management.com</a>
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
            Kajiado Milk Collection and Billing Management System
          </div>

          <div class="designby">
            Designed by: Flavian Mageto
            
          </div>

        </div>
      </div>
    </footer>
</body>

</html>

</body>

</html>

