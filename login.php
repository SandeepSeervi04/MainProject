<?php include "db.php"; ?>

<?php
if($_POST){
$res=$conn->query("SELECT * FROM users WHERE email='$_POST[email]' AND password='$_POST[password]'");

if($res->num_rows>0){
$_SESSION['user']=$_POST['email'];
header("Location: subjects.php");
}else{
echo "Invalid login";
}
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
<input name="email" placeholder="Email">
<input name="password" placeholder="Password">
<button>Login</button>
</form>
</div>

</body>
</html>