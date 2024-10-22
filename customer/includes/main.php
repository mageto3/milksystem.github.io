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
    <center><b><h1 style="background: red; color: white">Kajiado milk collection management system</h1></b></center>
    <!-- bottomline -->
    <div class="page-header__bottomline">
      <div class="container clearfix">


        <nav class="main-nav">
          <ul class="categories">

            <li class="categories__item">
              <a class="categories__link" href="#">
                Home
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