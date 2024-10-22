</head>

<body>

  <header class="page-header">
    <!-- topline -->
    <div class="page-header__topline">
      <div class="container clearfix">

        <div class="currency">
          <a class="currency__change" href="customer/my_account.php?my_orders">
          <?php
          if(!isset($_SESSION['customer_email'])){
          echo "Welcome :Farmer UI"; 
          }
          else
          { 
              echo "Welcome : " . $_SESSION['customer_email'] . "";
            }
?>
          </a>
        </div>

      
        
        
        <ul class="login">

<li class="login__item">
<?php
if(!isset($_SESSION['customer_email'])){
  echo '<a href="customer_register.php" class="login__link">REGISTER</a>';
} 
  else
  { 
      echo '<a href="customer/my_account.php?my_orders" class="login__link">My Account</a>';
  }   
?>  
</li>


<li class="login__item">
<?php
if(!isset($_SESSION['customer_email'])){
  echo '<a href="checkout.php" class="login__link">LOGIN</a>';
} 
  else
  { 
      echo '<a href="./logout.php" class="login__link">Logout</a>';
  }   
?>  
  
</li>
</ul>
      
      </div>
    </div>
    <!-- bottomline -->
    <div class="page-header__bottomline">
      <div class="container clearfix">

        
        </div>

        <nav class="main-nav">
          <ul class="categories">

            <li class="categories__item">
              <a class="categories__link" href="#">
               
              </a>
              </li>

            <li class="categories__item">
              <a class="categories__link" href="index.php">
                Home
               
              </a>
            </li>

            <li class="categories__item">
              <a class="categories__link categories__link--active" href="#aboutUs">
                ABOUT US
              </a>
            </li>
            <li class="categories__item">
              <a class="categories__link categories__link--active" href="#Faqs">
                FAQs
              </a>
            </li>
          <li class="categories__item">
              <a class="categories__link" href="customer/my_account.php?my_orders">
                My Account
                
              </a>  
            </li>

          </ul>
        </nav>
      </div>
    </div>
  </header>