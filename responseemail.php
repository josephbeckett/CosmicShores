<?php
  $useremail = $_SESSION['$useremail'];
  $last_id = $conn->insert_id;

	$to = "$useremail";
	$subject = 'Updated Support Ticket';
	$message = "
  <html>
     <head>
         <title>Regarding Recent Support Ticket</title>
         <link type='text/css' rel='stylesheet' href='css/materialize.min.css'  media='screen,projection'/>
         <link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet'>
         <link type='text/css' rel='stylesheet' href='css/stylesheet.css'  media='screen,projection'/>
     </head>
     <body>
      <h4>Thank you for contacting Cosmich-Shores support.</h4>
      <p>As far as we can now tell, the problem you contacted us about has now been fixed and you should be able to resume using the website without problem. <br /> If however the problem still occurs please contact us again at the shortest notice.</p>
      <p>Kind Regards <br /> The Cosmic-Shores Support Team</p>
     </body>
   </html>";

	$headers = "From: support@Cosmic-Shores.gmail.com" . "\r\n";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers = "Content-type:text/html;charset=UTF-8" . "\r\n";

	mail($to, $subject, $message, $headers);
 ?>
