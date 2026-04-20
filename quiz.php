<?php include "db.php";

if($_SERVER['REQUEST_METHOD']=="POST"){
$subject=$_GET['subject'];
$score=0;

$res=$conn->query("SELECT * FROM questions WHERE subject='$subject'");

while($row=$res->fetch_assoc()){
$q="q".$row['id'];

if(isset($_POST[$q]) && $_POST[$q]==$row['answer']){
$score++;
}
}

$user=$_SESSION['user'];

$conn->query("INSERT INTO results(user,subject,score)
VALUES('$user','$subject','$score')");

header("Location: result.php?score=$score");
exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<script src="js/script.js"></script>
</head>
<body>

<?php include "navbar.php"; ?>

<div class="container">
<div class="card">

<h2>Quiz</h2>
<div id="timer">Time: 15:00</div>

<form method="POST">

<?php
$subject=$_GET['subject'];
$res=$conn->query("SELECT * FROM questions WHERE subject='$subject'");
$i=1;

while($row=$res->fetch_assoc()){
echo "<div class='question-box'>";
echo "<p><b>Q$i. ".$row['question']."</b></p>";

echo "<label><input type='radio' name='q".$row['id']."' value='".$row['option1']."'> ".$row['option1']."</label>";
echo "<label><input type='radio' name='q".$row['id']."' value='".$row['option2']."'> ".$row['option2']."</label>";
echo "<label><input type='radio' name='q".$row['id']."' value='".$row['option3']."'> ".$row['option3']."</label>";
echo "<label><input type='radio' name='q".$row['id']."' value='".$row['option4']."'> ".$row['option4']."</label>";

echo "</div>";
$i++;
}
?>

<button type="submit">Submit Quiz</button>

</form>

</div>
</div>

</body>
</html>