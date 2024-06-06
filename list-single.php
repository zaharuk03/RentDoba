<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vintoniak.pl</title>
    <link rel="icon" type="image/x-icon" href="" />
    <link rel="stylesheet" href="style/style-all.css" />
    <link rel="stylesheet" href="style/style-header.css" />
    <link rel="stylesheet" href="style/style-list-single.css" />
    <link rel="stylesheet" href="style/style-footer.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200..900&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include('header.php');
    ?>
    <div class="overlay" id="overlay">
        <div class="container">
            <h1>Бронювання</h1>
            <div class="header">
                <div class="active" id="phone-tab">Бронювати через телефон</div>
                <div id="online-tab">Бронювати онлайн</div>
            </div>
            <div class="form-container">
                <div class="form-content" id="phone-form">
                    <h2>Бронюйте по телефону</h2>
                    <p>Введіть Ваш номер телефону і ми з'єднаємо з готелем швидко і безкоштовно</p>
                    <div class="form-group">
                        <label for="phone">Номер телефону</label>
                        <input type="text" id="phone" placeholder="+38 (__) ___ ____">
                    </div>
                    <div class="form-group">
                        <button type="button">З'єднати</button>
                    </div>
                </div>
                <div class="form-content" id="online-form" style="display: none;">
              
                </div>
            </div>
        </div>
    </div>



    <div class='list-single-block'>
        <div class='list-single'>
            <div class='list-single-navigation'>
                <div class='list-single-navigation-set1'>
                    <img src='image/list-single-row.png'>
                    <span>Назад</span>
                </div>
                <div class='list-single-navigation-set2'>
                    Головна / Квартири
                </div>
            </div>
            <div class='list-single-body-block'>
                <div class='list-single-body-image-block'>
                    <div class='carousel'>
                        <div id="left-arrow" class='list-single-body-image-arrowleft' onclick="prevImage()" style="background: url('image/list-single-body-image-arrow1.png');"></div>
                        <div class='list-single-body-image'>
                            <img id="carousel-image" class='list-single-body-image-carousel' src="image/list/1.png" alt="Image 1">
                        </div>
                        <div id="right-arrow" class='list-single-body-image-arrowright' onclick="nextImage()" style="background: url('image/list-single-body-image-arrow2.png');"></div>
                    </div>
                    <div class='list-single-body-image-pageimg' id="dots-container"></div>
                </div>
                <div class='list-single-body-title-block'>
                    <div class='list-single-body-title'>
                        <h1>Опубліковано сьогодні о 10:59</h1>
                        <h2>Оренда 2к квартири на Під Голоском</h2>
                        <h3>22 250 грн.</h3>
                    </div>
                    <div class='list-single-body-title-button'>Зателефонувати</div>
                    <div class='list-single-body-title-button2'>Забронювати</div>
                </div>
                <div class='list-single-body-title-block' style='margin-top: 29px'>
                    <h1 class='list-single-body-maps-title'>Місцезнаходження</h1>
                    <div class='list-single-body-maps-location'> 
                        <div class='list-single-body-maps-location-icon'></div>
                        <h1>Львів,<br>Шевченківський</h1>
                        <h2>Львівська область</h2>
                    </div>
                    <div class='list-single-body-maps-image'></div>
                    <div class='list-single-body-maps-info'> 
                        <h1>ID: 846086351</h1>
                        <h2>Переглядів: 203</h2>
                        <h3><div></div><span>Поскаржитися</span></h3>
                    </div>
                </div>
                <div class='list-single-body-description-block'>
                    <h1>ОПИС</h1>
                    <div class='list-single-body-description'>
                        Велика 2 кімнатна квартира 52м2, кухня-студія, окремо спальня квартира укомплектована всім
                        необхідним дзвоніть буду радий допомогти
                        Без співпраці з колегами
                    </div>
                    <div class='list-single-body-description-more'>
                        <div class='list-single-body-description-more-td'>
                            <h1>Загальна площа:</h1><h2>24м²</h2>
                        </div>
                        <div class='list-single-body-description-more-td'>
                            <h1>Поверх:</h1><h2>3 поверх</h2>
                        </div>
                        <div class='list-single-body-description-more-td'>
                            <h1>Кількість кімнат:</h1><h2>1 кімната</h2>
                        </div>
                        <div class='list-single-body-description-more-td'>
                            <h1>Ліжка:</h1><h2>1 ліжко</h2>   
                        </div>
                        <div class='list-single-body-description-more-td'>
                            <h1>Короткочасна оренда:</h1><h2>Від 1 години</h2>     
                        </div>
                        <div class='list-single-body-description-more-td'>
                            <h1>Санвузол:</h1><h2>Суміжний</h2>   
                        </div>
                        <div class='list-single-body-description-more-td'>
                            <h1>Ремонт:</h1><h2>Євроремонт</h2>   
                        </div>
                        <div class='list-single-body-description-more-td'>
                            <h1>Домашні улюбленці:</h1><h2>(Так, котик) (Так, великий песик.)</h2>
                        </div>
                        <div class='list-single-body-description-more-td'>
                            <h1>Меблювання:</h1><h2>З меблями</h2>   
                        </div>
                        <div class='list-single-body-description-more-td'>
                            <h1>Wi-fi:</h1><h2>Без Wi-fi</h2>    
                        </div>
                    </div>
                </div>
                <div class='list-single-body-similarorders-block'>
                    <h1>Схожі оголошення</h1>
                    <div class='recommendations-list-block'>
                        <div class='recommendations-list-image' style='background:url("image/1.png"); background-size: cover;'>
                            <div class='recommendations-list-price'>27 800 ₴</div>
                            <div class='recommendations-list-like'>
                                <div class='recommendations-list-like-image'></div>
                            </div>
                        </div>
                        <h1>Здається двокімнатна біля міського парку</h1>
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
                        <div class='recommendations-list-image' style='background:url("image/1.png"); background-size: cover;'>
                            <div class='recommendations-list-price'>27 800 ₴</div>
                            <div class='recommendations-list-like'>
                                <div class='recommendations-list-like-image'></div>
                            </div>
                        </div>
                        <h1>Здається двокімнатна біля міського парку</h1>
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
                        <div class='recommendations-list-image' style='background:url("image/1.png"); background-size: cover;'>
                            <div class='recommendations-list-price'>27 800 ₴</div>
                            <div class='recommendations-list-like'>
                                <div class='recommendations-list-like-image'></div>
                            </div>
                        </div>
                        <h1>Здається двокімнатна біля міського парку</h1>
                        <div class='recommendations-list-location'>
                            <div class='recommendations-list-location-block'></div>
                            <span>Коломия, вул Трильовського</span>
                        </div>
                        <div class='recommendations-list-info-block'>
                            <div class='recommendations-list-info' style='margin-left:18px'>2км від центру</div>
                            <div class='recommendations-list-info' style='margin-left:7px'>36м²</div>
                        </div>
                    </div>
                </div>
                <div class='list-single-body-contact-block'>
                    <div class='list-single-body-contact-title'>Зв’язатися з ПРОДАВЦЕМ</div>
                    <div class='list-single-body-contact-info'>
                        <div class='list-single-body-contact-info-image'></div>
                        <div class='list-single-body-contact-info-info'>
                            <h1>Оксана</h1>
                            <h2>Онлайн 11 травня 2024 р.</h2>
                        </div>
                    </div>
                    <div class='list-single-body-contact-number-block'>
                        <div class='list-single-body-contact-number-icon'></div>
                        <div class='list-single-body-contact-number-hash'>xxx xxx xxx</div>
                        <div class='list-single-body-contact-number-button'>Показати</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include('footer.php');
    ?>

    <script src="script/list-single-carousel-image.js"></script>
    <script>
        const phoneTab = document.getElementById('phone-tab');
        const onlineTab = document.getElementById('online-tab');
        const phoneForm = document.getElementById('phone-form');
        const onlineForm = document.getElementById('online-form');
        const overlay = document.getElementById('overlay');
        const bookButton = document.querySelector('.list-single-body-title-button2');

        phoneTab.addEventListener('click', () => {
            phoneTab.classList.add('active');
            onlineTab.classList.remove('active');
            phoneForm.style.display = 'block';
            onlineForm.style.display = 'none';
        });

        onlineTab.addEventListener('click', () => {
            onlineTab.classList.add('active');
            phoneTab.classList.remove('active');
            onlineForm.style.display = 'block';
            phoneForm.style.display = 'none';
        });

        bookButton.addEventListener('click', () => {
            overlay.style.display = 'flex';
        });

        overlay.addEventListener('click', (event) => {
            if (event.target === overlay) {
                overlay.style.display = 'none';
            }
        });
    </script>
</body>
</html>
