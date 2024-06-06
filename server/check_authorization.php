<?php
include('connect.php'); 
session_start(); 

if (isset($_POST['send_mail'])) {
    $mail = mysqli_real_escape_string($db, $_POST['mail']);
    $query = "SELECT mail_confirm FROM users WHERE mail = '$mail'";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row['mail_confirm'] == 1) {
            // Email підтверджено
            header("Location: password.php?mail=" . urlencode($mail));
            exit();
        } else {
            // Email не підтверджено
            $confirmation_code = rand(100000, 999999);
            $_SESSION['confirmation_code'] = $confirmation_code;
            $to = $mail;
            $subject = 'Ваш код подтверждения';
            $message = "Ваш код подтверждения: $confirmation_code";
            $headers = 'From: support@rentdoba.com' . "\r\n" .
                       'Reply-To: support@rentdoba.com' . "\r\n" .
                       'X-Mailer: PHP/' . phpversion();
            if (mail($to, $subject, $message, $headers)) {
                header("Location: mail.php?mail=" . urlencode($mail));
                exit();
            } else {
                echo "Помилка при відправленні пошти";
            }
        }
    } else {
        header("Location: password_new.php?mail=" . urlencode($mail));
        exit();
    }
}
if (isset($_POST['send_password'])) {
    $mail = mysqli_real_escape_string($db, $_POST['mail']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $password_confirm = mysqli_real_escape_string($db, $_POST['password_confirm']);
    if ($password == $password_confirm) {
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);
        date_default_timezone_set('Europe/Kiev');
        $reg_date = date('H:i:s d.m.Y');
        $query = "INSERT INTO users (mail, password, reg_date) 
        VALUES('$mail', '$password_hashed', '$reg_date')";
        mysqli_query($db, $query); 
        header("Location: index.php");
        exit();
    } else {
        header("Location: password_new.php?mail=" . urlencode($mail));
        exit();
    }
}
if (isset($_POST['send_confirm_mail'])) {
    $mail = mysqli_real_escape_string($db, $_POST['mail']);
    $mail_code = mysqli_real_escape_string($db, $_POST['mail_code']);
  
    if ($mail_code == $_SESSION['confirmation_code']) {
        $query = "UPDATE users SET mail_confirm = 1 WHERE mail = '$mail'";
        if (mysqli_query($db, $query)) {
            header("Location: password.php?mail=" . urlencode($mail));
            exit();
        } else {
            header("Location: authorization.php");
            exit();
        }
    } else {
        header("Location: authorization.php");
        exit();
    }
}
if (isset($_POST['accept_password'])) {
    $mail = mysqli_real_escape_string($db, $_POST['mail']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $query = "SELECT password FROM users WHERE mail = '$mail'";
    $result = $db->query($query);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];
        
        if (password_verify($password, $hashed_password)) {
            $_SESSION['mail'] = $mail;
            header("Location: index.php");
            exit();
        } else {
            header("Location: authorization2.php");
            exit();
        }
    } else {
        header("Location: authorization1.php");
        exit();
    }
    $db->close();
}
?>