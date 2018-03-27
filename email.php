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
        <link type='text/css' rel='stylesheet' href='css/materialize.min.css'  media='screen,projection'/>
        <link type='text/css' rel='stylesheet' href='css/stylesheet.css'  media='screen,projection'/>
     </head>
     <body>
      <h4>Thank you for becoming a member Cosmic Shores Amatuer Astronomy Society</h4>
      <p>You can now login to the website using your username and password</p>
      <br />
      <p>Kind Regards</p>
      <p>The Cosmic-Shores Team</p>
     </body>
   </html>";

	$headers = "From: info@Cosmic-Shores.gmail.com" . "\r\n";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers = "Content-type:text/html;charset=UTF-8" . "\r\n";

	mail($to, $subject, $message, $headers);
 ?>
