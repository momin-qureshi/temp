<?php  
 
if(isset($_POST['submit'])) {
 $mailto = "shapito0786@gmail.com";  //My email address
 //getting customer data
 $name = $_POST['imObjectForm_51_1']; //getting customer name
 $fromEmail = $_POST['imObjectForm_51_2']; //getting customer email
 $subject = $_POST['imObjectForm_51_3']; //getting subject line from client
 $subject2 = "Confirmation: Message was submitted successfully | Queen of the Sweat"; // For customer confirmation
 
 //Email body I will receive
 $message = "Client Name: " . $name . "\n"
 . "Email: " . $fromEmail . "\n\n"
 . "Client Message: " . "\n" . $_POST['imObjectForm_51_4'];
 
 //Message for client confirmation
 $message2 = "Dear " . $name . "\n"
 . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
 . "You submitted the following message: " . "\n" . $_POST['imObjectForm_51_4'] . "\n\n"
 . "Regards," . "\n" . "- Queen of the Sweat";
 
 //Email headers
 $headers = "From: " . $fromEmail; // Client email, I will receive
 $headers2 = "From: " . $mailto; // This will receive client
 
 //PHP mailer function
 
  $result1 = mail('noreply@talha-t.websitex5.me', '', $mailto, $subject, $message, $headers); // This email sent to My address
  $result2 = mail('noreply@talha-t.websitex5.me', '',$fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
 
  //Checking if Mails sent successfully
 
  if ($result1 && $result2) {
    $success = "Your Message was sent Successfully!";
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }
 
}
 
?>