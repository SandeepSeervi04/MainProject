<?php include "db.php";
$conn->query("DELETE FROM questions WHERE id=".$_GET['id']);
header("Location: admin.php");
?>