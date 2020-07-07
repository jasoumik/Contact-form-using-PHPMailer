<?php

use Svg\Tag\Path;


$result="";
if(isset($_POST['submit'])){
	require 'PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;

	$mail->Host='mail.jasoumik.com';
	$mail->Port= 465;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='ssl';
	$mail->Username='info@jasoumik.com';
	$mail->Password='Gp@16684803';


	$mail->setFrom($_POST['email'],$_POST['name']);
	$mail->addAddress('info@jasoumik.com');
	$mail->addReplyTo($_POST['email'],$_POST['name']);
  
	$mail->isHTML(true);
	$mail->Body='<h1 align=center>Name: '.$_POST['name'].'<br>Email: '
	.$_POST['email'].'<br>Message: '.$_POST['message'].'</h1>';

	if(!$mail->send()){
		$result = "Something Wrong. Try again,Please.";
	}
	else{
		$result="Thanks ".$_POST['name'].
		" for connecting with us. We will get back to you soon.";
		header('Location: index.php');
	}
	$email = new PHPMailer();
  $email->SetFrom('info@jasoumik.com', 'Jarif Ahmed Soumik'); 
$email->Subject   = 'Greetings!';
$email->isHTML(true);
$email->Body      = '

    <p class="para" align="center" style="color: brown;
            margin-top: 30px;
      padding: 5px 0;
    border: 8px solid rgb(22, 174, 235);
    text-align: center;
    font-size:xx-large;">Thanks for your support <br>
        We will get back to you soon <br>
        
        <br>
        <br>
        For queries : log on to www.jasoumik.com
    </p>';
$email->AddAddress($_POST['email'],$_POST['name'] );



$email->AddAttachment( "welcm.jpg" );

 $email->Send();
	// $to=$_POST['email'];
	// $msg='Thank you. We have Received your mail. Stay Connected .'.$att.' ';
	// $text1="From: info@jasoumik.com ";
	// $att=$mail->AddAttachment("welcm.jpg");
	// mail($to,$text1,$att);
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<title>jasoumik.com</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact100" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact100">
			<div class="wrap-contact100">
				<div class="contact100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="contact100-form validate-form"  method="post">
					<span class="contact100-form-title">
						Get in touch
						<h1 class="text-center text-success"><?php echo $result;  ?></h1>
					</span>
                 
				   
					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						<input class="input100" type="text" name="name" placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					
					<!-- <div class="wrap-input100 validate-input" data-validate = "Subject is required">
					<input class="input100" type="text" name="subject" placeholder="Subject">  
						<span class="focus-input100"></span>
					</div> -->


					<div class="wrap-input100 validate-input" data-validate = "Message is required">
						<textarea class="input100" name="message" placeholder="Message"></textarea>
						<span class="focus-input100"></span>
					</div>

					<div class="container-contact100-form-btn">
						<button class="contact100-form-btn" type="submit" name="submit">
							Send
						</button>
					</div>
					<br><br><br><br><br>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
