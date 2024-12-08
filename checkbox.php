<?php

$host="localhost";
$user="root";
$pass="";
$db="gymdb";
$conn=new mysqli($host,$user,$pass,$db);



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_SESSION['user_id'];
    $dayId = $_POST['day_id'];
    $isChecked = isset($_POST['checkbox']) ? 1 : 0;

    $pdo = new PDO('mysql:host=localhost;dbname=gymdb', 'root', '');

    $sql = "INSERT INTO preferences (user_id, day_id, checkbox_state) 
            VALUES (?, ?, ?)
            ON DUPLICATE KEY UPDATE checkbox_state = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$userId, $dayId, $isChecked, $isChecked]);

    header("Location: ../armOfSteel-days/day{$dayId}.php");
    exit;
}
?>