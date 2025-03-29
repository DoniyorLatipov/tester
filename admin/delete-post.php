<?php
require_once('config.php');

header('Content-Type: application/json');

session_start();

$response = ['success' => false, 'message' => ''];

$id = $_POST['id'] ?? null;

// Подключаемся к базе данных
$db = new DatabaseConfig();
$conn = $db->connect();

// Подготавливаем SQL-запрос для удаления страницы
$stmt = $conn->prepare("DELETE FROM blogs WHERE id = :id");
$stmt->bindParam(':id', $id);

// Выполняем запрос
if ($stmt->execute()) {
    $response['success'] = true;
    $response['message'] = 'Страница удалена.';
} else {
    $response['message'] = 'Ошибка при удалении страницы: ' . $stmt->errorInfo()[2];
}

$stmt = null;
$conn = null;

echo json_encode($response);