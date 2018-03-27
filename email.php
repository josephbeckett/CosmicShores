<?php
   $last_id = $conn->insert_id;

	$to = "$myemail";
	$subject = 'Account Creation';
	$message = "
  <html>
     <head>
         <title>Account Creation</title>
  		<link type='text/css' rel='stylesheet' href='css/materialize.min.css'  media='screen,projection'/>
  	    <link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet'>
     </head>
     <body>
      <4>Thank you sign up to Cosmic Shores Amatuer Astronomy Society</h4>
      <p>You can now login to the website using your username and password</p>
     </body>
   </html>";

	$headers = "From: info@Cosmic-Shores.gmail.com" . "\r\n";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers = "Content-type:text/html;charset=UTF-8" . "\r\n";

	mail($to, $subject, $message, $headers);
 ?>
