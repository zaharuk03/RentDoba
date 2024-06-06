<?php 
    include('server/check_authorization.php');
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vintoniak.pl</title>
    <link rel="icon" type="image/x-icon" href="" />
    <link rel="stylesheet" href="style/style-all.css" />
    <link rel="stylesheet" href="style/style-header.css" />
    <link rel="stylesheet" href="style/style-authorization.css" />
    <link rel="stylesheet" href="style/style-footer.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include('header.php');
    ?>

    <div class='authorization-block'>
        <div class='authorization'>
            <h1 style='text-align:center;'>Перевірити пошту</h1>
            <div class='mail-title'>
            <?php
                $mail = isset($_GET['mail']) ? $_GET['mail'] : '';
                function maskEmail($email) {
                    $email_parts = explode("@", $email);
                    $local_part = $email_parts[0];
                    $domain_part = $email_parts[1];
                    $masked_local_part = substr($local_part, 0, 1) . str_repeat('*', strlen($local_part) - 1);
                    $domain_parts = explode('.', $domain_part);
                    $masked_domain_part = substr($domain_parts[0], 0, 1) . str_repeat('*', strlen($domain_parts[0]) - 1) . '.' . end($domain_parts);
                    return $masked_local_part . '@' . $masked_domain_part;
                }
                $masked_mail = maskEmail($mail);
                echo "Нам потрібно переконатися, що це дійсно ви. Введіть код<br>підтвердження, який ми надіслали вам на електронну пошту $masked_mail.";
            ?>
            <?php 
                if (isset($_GET['mail'])) {
                    $mail = $_GET['mail'];
                    $mail_view = htmlspecialchars($mail);
                }else{
                    header("Location: authorization.php");
                    exit();
                }
            ?>
            </div>
            <form method="post" action="mail.php" autocomplete="off">
                <input type='text' name='mail' style='display:none' value='<?php echo $mail_view ?>'/>
                <input type='text' name='mail_code' class='authorization-mail' placeholder='Код підтвердження ' />
                <button type='submit' name='send_confirm_mail' class='authorization-login-button'>Створіть аккаунт</button>
            </form>
            <h3>Відправити новий код</h3>
            
            <div class='authorization-rules-block'>
                <div class='authorization-rules'>
                    <h2>
                        Входячи в обліковий запис або створюючи<br>новий, ви погоджуєтесь з нашими <span class='color-orange'>Правилами та<br>умовами</span> та <span class='color-orange'>Положення про конфіденційність</span><br>
                        <br><br>
                        <p>Всі права захищені.</p>
                        Copyright (2023–2024) — Rentdoba.com™
                    </h2>
                </div>
            </div>
        </div>
    </div>
 
    <?php
        include('footer.php');
    ?>
    <script src=""></script>
</body>
</html>
