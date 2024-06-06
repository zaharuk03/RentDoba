<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vintoniak.pl</title>
    <link rel="icon" type="image/x-icon" href="" />
    <link rel="stylesheet" href="style/style-all.css" />
    <link rel="stylesheet" href="style/style-header.css" />
    <link rel="stylesheet" href="style/style-index.css" />
    <link rel="stylesheet" href="style/style-footer.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200..900&display=swap" rel="stylesheet">
</head>
<body>
    <form action="server/logout.php" method="post">
        <button type="submit">Выйти</button>
    </form>
    <?php
        include('header.php');
    ?>
    <div class='index-main-block'>
        <!-- <div class='header-select-block'>
            <div class='header-select-login-block'>
                <div class='header-select-login-usericon'></div>
                <div class='header-select-login-usertext'>
                    <a href='authorization.php'><span class='color-darkteal'>User<br><div style='color: rgba(36, 70, 83, 0.7);'>id - 1234</div></span></a>
                </div>
            </div>
            <div class='header-select-blocking'>
                <h2 class='active'>Оголошення</h2>
                <h2>Повідомлення</h2>
                <h2>Платежі та рахунок</h2>
                <h2>Налаштування</h2>
            </div>
            <div class='header-select-exit-block'>
                <img src='image/header-select-exit-block.png' />
                <h2>Вийти</h2>
            </div>
        </div> -->
        <div class='index-main'>
            <div class='index-main-text'>
                <p class='color-darkteal'>Орендуйте своє місце</p>
                <span class='color-orange'>для життя з комфортом:</span>
                <p class='color-darkteal'>шукайте квартири просто</p>
                <h5>Знайдіть своє ідеальне житло без зусиль. Обирайте серед великого вибору квартир для оренди, що відповідають вашим потребам</h5>
            </div>
        </div>
        <div class='index-main-search'>
            <span>Уточнюйте ваші вимоги, знайдіть свій ідеальний варіант швидше.</span>
            <div class='index-main-search-block'>
                <div class='seach-input-block'>
                    <input type='text' placeholder='Місце'>
                    <div class='search-input-image' style='background:url("image/search1.png")'></div>
                </div>
                <div class='seach-input-block'>
                    <input type='text' placeholder='Ціна'>
                    <div class='search-input-image' style='background:url("image/search2.png")'></div>
                </div>
                <div class='seach-input-block'>
                    <input type='text' placeholder='Тип квартири'>
                    <div class='search-input-image' style='background:url("image/search3.png")'></div>
                </div>
                <div class='seach-input-block'>
                    <button type='submit' class='search-button'>Шукати</button>
                </div>
            </div>
        </div>
    </div>
    <div class='index-recommendations-block'>
        <div class='index-recommendations'>
            <div class='recommendations-title-block'>
                <div class='recommendations-title'>
                    <span class='text1'>Відкрийте для себе наші найкращі пропозиції житла</span>
                    <span class='text2'>Найкращий вибір тільки у нас</span>
                </div>
                <div class='recommendations-button'>Дивитись більше</div>
            </div>
            <div class='recommendations-list'>
                <div class='recommendations-list-block'>
                    <div class='recommendations-list-image' style='background:url("image/1.png"); background-size: cover;'>
                        <div class='recommendations-list-price'>27 800 ₴</div>
                        <div class='recommendations-list-like'>
                            <div class='recommendations-list-like-image'></div>
                        </div>
                    </div>
                    <h1>Здається двокімнатна біля міського парку </h1>
                    <div class='recommendations-list-location'>
                        <div class='recommendations-list-location-block'></div>
                        <span>Коломия, вул Трильовського</span>
                    </div>
                    <div class='recommendations-list-info-block'>
                        <div class='recommendations-list-info' style='margin-left:18px'>2км від центру</div>
                        <div class='recommendations-list-info' style='margin-left:7px'>36м²</div>
                    </div>
                </div>
                <div class='recommendations-list-block'>
                    <div class='recommendations-list-image' style='background:url("image/2.png"); background-size: cover;'>
                        <div class='recommendations-list-price'>39 999 ₴</div>
                        <div class='recommendations-list-like'>
                            <div class='recommendations-list-like-image'></div>
                        </div>
                    </div>
                    <h1>Трикімнатна з новим ремонтом </h1>
                    <div class='recommendations-list-location'>
                        <div class='recommendations-list-location-block'></div>
                        <span>Коломия, вул Мазепи</span>
                    </div>
                    <div class='recommendations-list-info-block'>
                        <div class='recommendations-list-info' style='margin-left:18px'>0,5км від центру</div>
                        <div class='recommendations-list-info' style='margin-left:7px'>65м²</div>
                    </div>
                </div>
                <div class='recommendations-list-block'>
                    <div class='recommendations-list-image' style='background:url("image/3.png"); background-size: cover;'>
                        <div class='recommendations-list-price'>10 800 ₴</div>
                        <div class='recommendations-list-like'>
                            <div class='recommendations-list-like-image'></div>
                        </div>
                    </div>
                    <h1>Однокімнатна квартира в цетнрі</h1>
                    <div class='recommendations-list-location'>
                        <div class='recommendations-list-location-block'></div>
                        <span>Коломия, вул Ірчана</span>
                    </div>
                    <div class='recommendations-list-info-block'>
                        <div class='recommendations-list-info' style='margin-left:18px'>В центрі</div>
                        <div class='recommendations-list-info' style='margin-left:7px'>29м²</div>
                    </div>
                </div>
                <div class='recommendations-list-block'>
                    <div class='recommendations-list-image' style='background:url("image/4.png"); background-size: cover;'>
                        <div class='recommendations-list-price'>22 000 ₴</div>
                        <div class='recommendations-list-like'>
                            <div class='recommendations-list-like-image'></div>
                        </div>
                    </div>
                    <h1>Оренда двокімнатної  в новобудові</h1>
                    <div class='recommendations-list-location'>
                        <div class='recommendations-list-location-block'></div>
                        <span>Коломия, вул Зубенка</span>
                    </div>
                    <div class='recommendations-list-info-block'>
                        <div class='recommendations-list-info' style='margin-left:18px'>300м від центру</div>
                        <div class='recommendations-list-info' style='margin-left:7px'>40м²</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='index-whywe'>
        <div class='index-whywe-block'>
            <div class='index-whywe-leftblock'></div>
            <div class='index-whywe-rightblock'>
                <div class='whywe-rightblock-title'>
                    <div class='whywe-rightblock-titleline'></div>
                    <h1>Хто ми ?</h1>
                </div>
                <h2>Ми – команда, що прагне зробити пошук і оренду житла простими та зручними.</h2>
                <h3>Наші ключові цінності – чесність, надійність та орієнтованість на клієнта. Ми завжди готові відповісти на ваші запитання та допомогти на кожному етапі пошуку житла. </h3>
            </div>
        </div>
    </div>
    <?php
        include('footer.php');
    ?>
    <script src=""></script>
</body>
</html>
