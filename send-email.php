<?php
// Replace with your actual email
$to = "saifulislamwebdev@gmail.com";

// Collect form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$from = $_POST['from'];
$toDestination = $_POST['to'];
$date = $_POST['date'];
$type = $_POST['type'];

// Compose message
$subject = "New Ticket Booking Request";
$message = "Hello! I need A ticket to Visit from $from to $toDestination
  These are my details". " My Name is: $name\n"
         . "Email: $email\n"
         . "phone: $phone\n"
         . "From: $from\n"
         . "To: $toDestination\n"
         . "Date: $date\n"
         . "Type: $type";

$headers = "From: <info@sation-ltd.com>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";


// Send email
if (mail($to, $subject, $message, $headers)) {
  header("Location: thankyou.html");
  exit();
} else {
    echo "<script>alert
    ('❌ Failed to send booking request. Please try again later.');
     window.history.back();
     </script>";
}
?>