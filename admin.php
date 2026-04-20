<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include "navbar.php"; ?>

<div class="container">
<div class="card">

<h2>🛠 Admin Panel</h2>

<a href="add_question.php">
<button style="margin-bottom:15px;">➕ Add Question</button>
</a>

<table class="table">

<tr>
<th>ID</th>
<th>Question</th>
<th>Subject</th>
<th>Actions</th>
</tr>

<?php
$res = $conn->query("SELECT * FROM questions");

while($row = $res->fetch_assoc()){
    echo "<tr>";
    
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['question']."</td>";
    echo "<td>".$row['subject']."</td>";
    
    echo "<td>
    <a href='edit_question.php?id=".$row['id']."'><button class='edit-btn'>Edit</button></a>
    <a href='delete_question.php?id=".$row['id']."'><button class='delete-btn'>Delete</button></a>
    </td>";
    
    echo "</tr>";
}
?>

</table>

</div>
</div>

</body>
</html>