<div class="navbar">
    <h2>QuizApp</h2>

    <div>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="features.php">Features</a>
        <a href="contact.php">Contact</a>

        <?php if(isset($_SESSION['user'])) { ?>
            <a href="subjects.php">Subjects</a>
            <a href="leaderboard.php">Leaderboard</a>
            <a href="admin.php">Admin</a>
            <a href="logout.php">Logout</a>
        <?php } else { ?>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        <?php } ?>
    </div>
</div>