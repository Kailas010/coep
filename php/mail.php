<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "kailaspatil010@gmail.com";
  $email = $_REQUEST['contactEmailField'];
  $subject = "I Need Help";
  $comment = $_REQUEST['contactMessageTextarea'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>