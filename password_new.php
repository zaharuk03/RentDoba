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
            <h1 style='text-align:center;'>Створення пароля</h1>
            <div class='password-title'>
                Пароль повинен складатися з великих і малих літер та цифр. Довжина – не менше 10 символів.
            </div>

            <form method="post" action="password_new.php" autocomplete="off">
                <?php 
                if (isset($_GET['mail'])) {
                    $mail = $_GET['mail'];
                    $mail_view = htmlspecialchars($mail);
                }else{
                    header("Location: authorization.php");
                    exit();
                }
                ?>
                <input type='text' name='mail' style='display:none' value='<?php echo $mail_view ?>'/>
                <div class='authorization-password-block'>
                    <input type='password' name='password' class='authorization-password' placeholder='Введіть пароль'/>
                    <div class='authorization-password-iconhide'></div>
                </div>
                <div class='authorization-password-block' style='margin-top: 19px'>
                    <input type='password' name='password_confirm' class='authorization-password' placeholder='Підтвердіть пароль'/>
                    <div class='authorization-password-iconhide'></div>
                </div>
            
                <button type='submit' name='send_password' class='authorization-login-button' style='margin-top:35px'>Створіть аккаунт</button>
            </form>
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
    <script src="script/input-hide.js"></script>
</body>
</html>
