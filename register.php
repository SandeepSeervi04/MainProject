<?php include "db.php"; ?>

<?php
if($_POST){
$conn->query("INSERT INTO users(name,email,password)
VALUES('$_POST[name]','$_POST[email]','$_POST[password]')");
echo "Registered!";
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include "navbar.php"; ?>

<div class="container">
<form method="POST">
<input name="name" placeholder="Name">
<input name="email" placeholder="Email">
<input name="password" placeholder="Password">
<button>Register</button>
</form>
</div>

</body>
</html>