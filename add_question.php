<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>
<title>Add Question</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include "navbar.php"; ?>

<div class="container">
<div class="card">

<h2>Add Question</h2>

<form method="POST">
<input type="text" name="question" placeholder="Question" required>

<input type="text" name="option1" placeholder="Option 1" required>
<input type="text" name="option2" placeholder="Option 2" required>
<input type="text" name="option3" placeholder="Option 3" required>
<input type="text" name="option4" placeholder="Option 4" required>

<input type="text" name="answer" placeholder="Correct Answer" required>

<select name="subject">
<option>DAA</option>
<option>Environment</option>
<option>DCN</option>
<option>TOC</option>
</select>

<button type="submit">Add Question</button>
</form>

<?php
if($_POST){

$q = $_POST['question'];
$o1 = $_POST['option1'];
$o2 = $_POST['option2'];
$o3 = $_POST['option3'];
$o4 = $_POST['option4'];
$ans = $_POST['answer'];
$sub = $_POST['subject'];

$conn->query("INSERT INTO questions(question,option1,option2,option3,option4,answer,subject)
VALUES('$q','$o1','$o2','$o3','$o4','$ans','$sub')");

echo "<p style='color:green;'>Question Added Successfully!</p>";
}
?>

</div>
</div>

</body>
</html>