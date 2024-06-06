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
            <h1>Увійдіть або створіть аккаунт</h1>
            <form method="post" action="authorization.php" autocomplete="off">
                <input type='text' class='authorization-login' name='mail' placeholder='Введіть адресу вашої електронної пошти' />
                <button type='submit' name='send_mail' class='authorization-login-button'>Продовжити через електронну пошту</button>
            </form>
            <div class='authorization-login-block'>
                <div class='authorization-login-block-text'>
                    <div class='login-block-text-line'></div>
                    <h2>або скористайтеся одним із цих варіантів</h2>
                    <div class='login-block-text-line'></div>
                </div>
                <div class='login-block-social'>
                    <div class='login-block-social-block' style='margin-left: 89px;'>
                        <div class='login-block-social-icon social-facebook'></div>
                    </div>
                    <div class='login-block-social-block' style='margin-left: 32px;'>
                        <div class='login-block-social-icon social-google'></div>
                    </div>
                    <div class='login-block-social-block' style='margin-left: 32px;'>
                        <div class='login-block-social-icon social-apple'></div>
                    </div>
                </div>
            </div>
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
