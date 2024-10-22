<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>

  <main>
    <!-- HERO -->
    <div class="nero">
      <div class="nero__heading">
        <span class="nero__bold">File </span>a Complain
      </div>
      <center>
      <p class="nero__text">
        Details do not match? Send us an email here👇
      </p>
      </center>
     <div style=" color: red; ">
<form action="mailto: email@example.com" method="post" enctype="text/plain">
      Farmers name: <br><input type="text" name="fname" style="border-radius: 10%"> <br>
      Farmers email: <br><input type="text" name="fid" style="border-radius: 10%"> <br>
      Issue: <br><br><input type="text" name="fid" style="border-radius: 10%"> <br><br><br>
      <button><input type="submit" Value="send" style="color: red"></button>
      
    </form>
</div>
    </div>
   

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>
