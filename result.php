<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>
<title>Result</title>
<link rel="stylesheet" href="css/style.css">

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<?php include "navbar.php"; ?>

<div class="container">
<div class="card">

<h2>Your Score</h2>

<?php
$score = $_GET['score'];
$total = 20; // since each subject has 20 questions
$wrong = $total - $score;

echo "<h3>$score / $total</h3>";
?>

<!-- CHART -->
<canvas id="myChart" width="200" height="200"></canvas>

<br><br>
<a href="subjects.php"><button>Back to Subjects</button></a>

</div>
</div>

<script>
const ctx = document.getElementById('myChart');

new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Correct', 'Wrong'],
        datasets: [{
            data: [<?php echo $score; ?>, <?php echo $wrong; ?>],
            backgroundColor: ['#28a745', '#dc3545']
        }]
    },
    options: {
        plugins: {
            legend: {
                position: 'bottom'
            }
        }
    }
});
</script>

</body>
</html>