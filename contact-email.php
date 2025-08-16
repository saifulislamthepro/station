<?php 

$to = "saifulislamwebdev@gmail.com";

// form data

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phone'];

//compose

$subject = "New Quiry Request";
$message ="Hello! I need to know more about this agency |"
         . "Name: $name\n"
         . "message: $message\n"
         . "Email: $email\n"
         . "phone: $phone\n";

$headers = "From: <info@sation-ltd.com>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send email
if (mail($to, $subject, $message, $headers)) {
  header("Location: thankyou.html");
  exit();
} else {
    echo "<script>alert
    ('❌ Failed to the request. Please try again later.');
     window.history.back();
     </script>";
}

?>