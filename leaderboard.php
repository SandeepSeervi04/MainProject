<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Leaderboard</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include "navbar.php"; ?>

<div class="container">
<div class="card">

<h2>🏆 Leaderboard</h2>

<table class="table">

<tr>
<th>Rank</th>
<th>User</th>
<th>Subject</th>
<th>Score</th>
</tr>

<?php
$res = $conn->query("SELECT * FROM results ORDER BY score DESC");

$rank = 1;

while($row = $res->fetch_assoc()){
    echo "<tr>";
    
    echo "<td>".$rank."</td>";
    echo "<td>".$row['user']."</td>";
    echo "<td>".$row['subject']."</td>";
    echo "<td>".$row['score']."</td>";
    
    echo "</tr>";
    $rank++;
}
?>

</table>

</div>
</div>

</body>
</html>