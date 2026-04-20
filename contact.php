<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include "navbar.php"; ?>

<div class="container">
<div class="card">

<h2>Contact Us</h2>

<form method="POST">
<input type="text" name="name" placeholder="Enter Name" required>
<input type="email" name="email" placeholder="Enter Email" required>
<textarea name="message" placeholder="Enter Message" required></textarea>
<button type="submit">Send</button>
</form>

<?php
if($_POST){
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

echo "<p style='color:green;'>Message Sent Successfully!</p>";
}
?>

</div>
</div>

</body>
</html>