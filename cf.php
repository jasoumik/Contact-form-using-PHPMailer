<?php


// ignore this file .. it was tested using mail function
if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $message= $_POST['message'];
     

    $to= "info@jasoumik.com";
    $headers="From: ".$email;
    $text = "You have an email from ".$name.".\n\n".$message;
  
    mail($to,$text,$headers);
    header('Location:index.php?mailSend');

    $check = mail($to,$text,$headers);
     if($check)
{
    $msg ="Thank you we have receive your email!";
    $text1="From: info@jasoumik.com \n\n".$msg;
      $from="info@jasoumik.com";
      mail($email,$text1,$from);
}
}
?>
