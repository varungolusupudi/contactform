<?php
  if(isset($_POST['submit'])){
   $name = $_POST['name'];
   $phone = $_POST['phone'];
   $mailfrom = $_POST['email'];
   $message = $_POST['message'];

   $mailTo = "skdistributors@rediffmail.com";
   $headers = "From: ".$mailfrom;
   $txt = "You have received an e-mail from ".$name.".\n\n".$message;

   mail($mailTo, $phone, $txt, $headers);
   header("Location: index.php?mailsend");
}