<?php
   $last_id = $conn->insert_id;

	$to = "$useremail";
	$subject = 'Support Ticket';
	$message = "
  <html>
     <head>
         <title>Support Ticket</title>
         <link type='text/css' rel='stylesheet' href='css/materialize.min.css'  media='screen,projection'/>
         <link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet'>
         <link type='text/css' rel='stylesheet' href='css/stylesheet.css'  media='screen,projection'/>
     </head>
     <body>
      <h4>Thank you for contacting Cosmich-Shores support.</h4>
      <p>We will no proceed to look through the problem you have submitted, please be paintent. we will email again when your problem has hopefully been solved.</p>
      <p>Kind Regards <br /> The Cosmic-Shores Support Team</p>
     </body>
   </html>";

	$headers = "From: support@Cosmic-Shores.gmail.com" . "\r\n";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers = "Content-type:text/html;charset=UTF-8" . "\r\n";

	mail($to, $subject, $message, $headers);
 ?>
