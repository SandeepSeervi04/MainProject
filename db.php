<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

$conn = new mysqli("localhost", "root", "", "quiz-db");

if($conn->connect_error){
    die("Database Connection Failed: " . $conn->connect_error);
}
?>