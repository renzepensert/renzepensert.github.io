<?php
// define variables and set to empty values
$name = $email = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $message = test_input($_POST["message"]);
  


$mailTo = "rens_groot@hotmail.com";
$headers = "From: ".$email;
$txt = " You have recieved an email from ".$name.".\n\n".$message;

mail($mailTo, $headers, $txt, $headers);	

header("Location: index.html?mailsend");
}
?>