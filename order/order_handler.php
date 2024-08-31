<?php
session_start();
require 'detabase.inc.php'; // Database connection

header('Content-Type: application/json');

if (!isset($_SESSION['useruid'])) {
    echo json_encode(['success' => false, 'message' => 'User not logged in']);
    exit();
}

$input = json_decode(file_get_contents('php://input'), true);
$phone_model = $input['phone_model'];

$user_id = $_SESSION['useruid'];

$stmt = $conn->prepare("INSERT INTO orders (useruid, phone_model) VALUES (?, ?)");
$stmt->bind_param("is", $useruid, $phone_model);
if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}

$stmt->close();
$conn->close();
?>
