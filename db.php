<?php
$conn = new mysqli(
    "sql100.infinityfree.com",
    "if0_41709568",
    "sandeep2988",
    "if0_41709568_quizdb"
);

if($conn->connect_error){
    die("Database Failed");
}
?>