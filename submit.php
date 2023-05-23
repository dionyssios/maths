<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Customize the email headers and content as per your requirements
  $to = "dionysios.a.kokkoris@gmail.com";
  $subject = "New form submission";
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  // Send the email
  if (mail($to, $subject, $body)) {
    echo "Email sent successfully!";
  } else {
    echo "Failed to send email.";
  }
}
?>