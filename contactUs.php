<!DOCTYPE html>
<html>
<title>MØJ</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="style.css">
<script src="js/jquery.min.js"></script>
<script src="js/simpleCart.min.js"> </script>
<body>
<!-- Links (sit on top) -->
  <div class="w3-top">
    <div class="w3-row w3-padding w3-black" style="max-height:100px; width:100%">

      <div class="w3-col s3">
        <a href="index.html#home" class="w3-button w3-block w3-black topMenuItems">HØME</a>
      </div>

      <div class="w3-col s3">
        <a href="shop.html" class="w3-button w3-block w3-black topMenuItems">SHØP</a>
      </div>
      <div class="w3-col s3">
        <a href="index.html#about" class="w3-button w3-block w3-black topMenuItems">ABØÜT</a>
      </div>

        <!-- <a href=checkout.html class="w3-button w3-block w3-black" style="width: 30%; margin-left: 250%; position: relative; bottom: 35px"> CART <i class="fa fa-shopping-cart"></i></a> -->
        <div class="w3-col s3">
          <!-- <a href=cart.html class="w3-button w3-block w3-black" style="width: 70%; margin-left: 250%; position: relative; bottom: 20px; right: 30%"><img src="images/cart.png" alt=""/> CART: <span id="simpleCart_quantity" class="simpleCart_quantity"></span> item(s) </a> -->
          <form target="_self" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
          ">
          <input type="submit" class="w3-button w3-block w3-black topMenuItems" name="submit" value="BASKET" >
         </form>
        </div>

  <!-- logo -->  <div class="logo"> <img src="images/logo.jpg"  class="logo"> </div>
      </div>
    </div>
  </div>





		 <!-- <div class="box_1">
				 <a href="cart.html"><h3>Cart: <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)<img src="images/cart.png" alt=""/></h3></a>
				 <p><a href="javascript:;" class="simpleCart_empty">empty cart</a></p>

			 </div> -->



    <!-- contact us -->
    <br><br><br><br>
    <div class="container">
    <form action="action_page.php">
      <label for="name">Name</label>
      <input type="text" id="name" name="firstname" placeholder="Your name..">

      <label for="email">E-mail</label>
      <input type="text" id="email" name="lastname" placeholder="Your e-mail..">

      <label for="message">Comments</label>
      <textarea id="message" name="subject" placeholder="Write something.." style="height:200px"></textarea>

      <input type="submit" value="Submit">
    </form>
  </div>

<!-- Add a background color and large text to the whole page -->
<div class="w3-lightgrey w3 w3-large">

</div>



<!--footer  -->
  <div class="w3-panel w3-black footer">
    <div class="w3-col s3">
      <a  href="contactUs.html" class="w3-button w3- w3-black  contactUsButton">Cøntact Us</a>
  <!-- <a href="contactUs.html" class="w3-button w3-block w3-black contactUsButton">Cøntact Us</a> -->
    </div>
    </div>

</body>
</html>
