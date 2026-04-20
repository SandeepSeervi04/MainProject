<?php include "db.php";

$id=$_GET['id'];

if($_POST){
$conn->query("UPDATE questions SET question='$_POST[question]' WHERE id=$id");
header("Location: admin.php");
}
?>

<form method="POST">
<input name="question">
<button>Update</button>
</form>