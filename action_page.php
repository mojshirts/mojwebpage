<?php

if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $mailFrom = $_POST['email'];
   $message = $_POST['message'];

   $mailTo = "mojshirts@gmail.com";
   $headers = "From: ".$mailFrom
   $txt = "You have received an e-mail from ".$name.".\n\n".$message;

   mail($mailTo, $txt, $headers);
   header("Location: contactUs.html?mailsend")

}
