<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['addlist-name'];
    $price = $_POST['addlist-price'];
    $options = $_POST['addlist-options'];
    $contractual = isset($_POST['addlist-contractual']) ? 1 : 0;
    $description = $_POST['addlist-description'];
    $floor = $_POST['addlist-floor'];
    $area = $_POST['addlist-area'];
    $rooms = $_POST['addlist-rooms'];
    $bad = $_POST['addlist-bad'];
    $rent = $_POST['addlist-rent'];
    $bathroom = $_POST['addlist-bathroom'];
    $repair = $_POST['addlist-repair'];
    $animal1 = isset($_POST['addlist-animal1']) ? 1 : 0;
    $animal2 = isset($_POST['addlist-animal2']) ? 1 : 0;
    $animal3 = isset($_POST['addlist-animal3']) ? 1 : 0;
    $animal4 = isset($_POST['addlist-animal4']) ? 1 : 0;
    $animal5 = isset($_POST['addlist-animal5']) ? 1 : 0;
    $animal6 = isset($_POST['addlist-animal6']) ? 1 : 0;
    $location = $_POST['addlist-location'];
    $contact = $_POST['addlist-contact'];
    $mail = $_POST['addlist-mail'];
    $phone = $_POST['addlist-phone'];

    $activeFurniture = $_POST['activeFurniture'];
    $activeWifi = $_POST['activeWifi'];
    $activeType = $_POST['activeType'];

    $uploadedImages = json_decode($_POST['uploadedImages'], true);

    $dsn = 'mysql:host=localhost;dbname=listings;charset=utf8';
    $username = 'localhost';
    $password = '';
    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Помилка: ' . $e->getMessage()]);
        exit;
    }

    $sql = "INSERT INTO listings (name, price, options, contractual, description, floor, area, rooms, bad, rent, bathroom, repair, animal1, animal2, animal3, animal4, animal5, animal6, location, contact, mail, phone, active_furniture, active_wifi, active_type, images) 
            VALUES (:name, :price, :options, :contractual, :description, :floor, :area, :rooms, :bad, :rent, :bathroom, :repair, :animal1, :animal2, :animal3, :animal4, :animal5, :animal6, :location, :contact, :mail, :phone, :active_furniture, :active_wifi, :active_type, :images)";
    $stmt = $pdo->prepare($sql);
    $params = [
        ':name' => $name,
        ':price' => $price,
        ':options' => $options,
        ':contractual' => $contractual,
        ':description' => $description,
        ':floor' => $floor,
        ':area' => $area,
        ':rooms' => $rooms,
        ':bad' => $bad,
        ':rent' => $rent,
        ':bathroom' => $bathroom,
        ':repair' => $repair,
        ':animal1' => $animal1,
        ':animal2' => $animal2,
        ':animal3' => $animal3,
        ':animal4' => $animal4,
        ':animal5' => $animal5,
        ':animal6' => $animal6,
        ':location' => $location,
        ':contact' => $contact,
        ':mail' => $mail,
        ':phone' => $phone,
        ':active_furniture' => $activeFurniture,
        ':active_wifi' => $activeWifi,
        ':active_type' => $activeType,
        ':images' => implode(',', $uploadedImages)
    ];
    try {
        if ($stmt->execute($params)) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Помилка.']);
        }
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Помилка: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Помилка.']);
}
?>