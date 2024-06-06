<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    $tempName = $_FILES['image']['tmp_name'];
    $originalName = basename($_FILES['image']['name']);
    $extension = pathinfo($originalName, PATHINFO_EXTENSION);
    $newName = uniqid('img_', true) . '.' . $extension;
    $uploadFile = $uploadDir . $newName;

    if (move_uploaded_file($tempName, $uploadFile)) {
        $response = [
            'success' => true,
            'filePath' => $uploadFile,
            'fileName' => $newName 
        ];
    } else {
        $response = [
            'success' => false,
            'message' => 'Помилка.'
        ];
    }
    echo json_encode($response);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Помилка.'
    ]);
}
?>