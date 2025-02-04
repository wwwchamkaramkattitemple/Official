<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];

  $to = "chamkaramkattiltemple@gmail.com"; // Replace with your email address
  $subject = "Form Submission from $name";
  $headers = "From: $email";

  mail($to, $subject, $subject, $headers);
}
header("Location: index.html"); // Redirect to a thank-you page
exit();
?>