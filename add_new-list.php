<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vintoniak.pl</title>
    <link rel="icon" type="image/x-icon" href="" />
    <link rel="stylesheet" href="style/style-all.css" />
    <link rel="stylesheet" href="style/style-header.css" />
    <link rel="stylesheet" href="style/style-add-new-list.css" />
    <link rel="stylesheet" href="style/style-footer.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200..900&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include('header.php');
    ?>
    <div class='addlist-title-block'>
        <div class='addlist-title'>Створити оголошення</div>
    </div>
    <form id="addlistForm">
    <div class='addlist-details-block'>
        <div class='addlist-details'>
            <h1>Опишіть у подробицях</h1>
            <h2>Вкажіть назву*</h2>
            <input type='text' id='name' name='addlist-name' class='addlist-details-name-input' oninput="updateNameCounter()"/>
            <div class='addlist-details-name-input-block'>
                <h3>Введіть щонайменше 16 символів</h3>
                <h4><span id="nameCharCount">0</span>/70</h4>
            </div>
            <h5>Ціна</h5>
            <div class='addlist-details-price-input-block'>
                <input type='text' name='addlist-price' class='addlist-details-price-input' />
                <select id="myDropdown" name="addlist-options" class='addlist-details-price-select'>
                    <option value="option1">грн.</option>
                    <option value="option2">Option 2</option>
                    <option value="option3">Option 3</option>
                    <option value="option4">Option 4</option>
                </select>
            </div>
            <div class='addlist-details-contractual-block'>
                <h6>Договірна</h6>
                <input type='checkbox' name='addlist-contractual' />
            </div>
        </div>
    </div>
    <div class='addlist-image-block'>
        <div class='addlist-image'>
            <h1>Фото</h1>
            <h2>Перше фото буде на обкладинці оголошення. Перетягніть, щоб змінити порядок фото.</h2>
            <div class='addlist-image-list-block'>
                <div class='addlist-image-addbutton'><span>Додати фото</span></div>
                <input type="file" id="fileInput" style="display: none;" accept="image/*">
                <div class='addlist-image-list-image-block'><div class='addlist-image-list-image' style="background: url('image/addlist-image.png'); background-position: center; background-repeat: no-repeat;"></div></div>
                <div class='addlist-image-list-image-block'><div class='addlist-image-list-image' style="background: url('image/addlist-image.png'); background-position: center; background-repeat: no-repeat;"></div></div>
                <div class='addlist-image-list-image-block'><div class='addlist-image-list-image' style="background: url('image/addlist-image.png'); background-position: center; background-repeat: no-repeat;"></div></div>
                <div class='addlist-image-list-image-block'><div class='addlist-image-list-image' style="background: url('image/addlist-image.png'); background-position: center; background-repeat: no-repeat;"></div></div>
                <div class='addlist-image-list-image-block'><div class='addlist-image-list-image' style="background: url('image/addlist-image.png'); background-position: center; background-repeat: no-repeat;"></div></div>
                <div class='addlist-image-list-image-block'><div class='addlist-image-list-image' style="background: url('image/addlist-image.png'); background-position: center; background-repeat: no-repeat;"></div></div>
                <div class='addlist-image-list-image-block'><div class='addlist-image-list-image' style="background: url('image/addlist-image.png'); background-position: center; background-repeat: no-repeat;"></div></div>
                <div class='addlist-image-list-image-block'><div class='addlist-image-list-image' style="background: url('image/addlist-image.png'); background-position: center; background-repeat: no-repeat;"></div></div>
                <div class='addlist-image-list-image-block'><div class='addlist-image-list-image' style="background: url('image/addlist-image.png'); background-position: center; background-repeat: no-repeat;"></div></div>
                <div class='addlist-image-list-image-block'><div class='addlist-image-list-image' style="background: url('image/addlist-image.png'); background-position: center; background-repeat: no-repeat;"></div></div>
                <div class='addlist-image-list-image-block'><div class='addlist-image-list-image' style="background: url('image/addlist-image.png'); background-position: center; background-repeat: no-repeat;"></div></div>
            </div>
        </div>
    </div>
    <div class='addlist-description-block'>
        <div class='addlist-description'>
            <h1>Опис*</h1>
            <textarea id="description" name='addlist-description' placeholder='Подумайте, що ви хотіли би дізнатися з оголошення. І додайте це в опис' oninput="updateDescriptionCounter()"></textarea>
            <div class='addlist-description-info'>
                <h2>Введіть що найменше 40 символів</h2>
                <h3><span id="charCount">0</span>/9000</h3>
            </div>
        </div>
    </div>
    <div class='addlist-AdditionalInformation-block'>
        <div class='addlist-AdditionalInformation'>
            <h1>Додаткова інформація</h1>
            <h2 style='margin-top: 36px;'>Приватні чи бізнес*</h2>
            <div class='addlist-AdditionalInformation-typelist-block'>
                <div id="info-type-1" class='addlist-AdditionalInformation-typelist-private active'>Приватна особа</div>
                <div id="info-type-2" class='addlist-AdditionalInformation-typelist-business' style='margin-left: 10px;'>Бізнес</div>
            </div>
            <h3>Зробіть вибір</h3>
            <h2 style='margin-top: 36px;'>Поверх*</h2>
            <input type='text' name='addlist-floor' class='addlist-AdditionalInformation-input'/>
            <h2 style='margin-top: 36px;'>Загальна площа*</h2>
            <input type='text' name='addlist-area' class='addlist-AdditionalInformation-input' placeholder='м²'/>
            <h2 style='margin-top: 36px;'>Кількість кімнат*</h2>
            <select id="myDropdown" name='addlist-rooms' class='addlist-AdditionalInformation-select'>
                <option value="option1">Обрати</option>
                <option value="option2">1</option>
                <option value="option3">2</option>
                <option value="option4">3</option>
                <option value="option4">4</option>
                <option value="option4">5</option>
            </select>
            <h2 style='margin-top: 36px;'>Ліжка</h2>
            <select id="myDropdown" name='addlist-bad' class='addlist-AdditionalInformation-select'>
                <option value="option1">Обрати</option>
                <option value="option2">1</option>
                <option value="option3">2</option>
                <option value="option4">3</option>
                <option value="option4">4</option>
                <option value="option4">5</option>
            </select>
            <h2 style='margin-top: 36px;'>Короткочасна оренда</h2>
            <select id="myDropdown" name='addlist-rent' class='addlist-AdditionalInformation-select'>
                <option value="option1">Обрати</option>
                <option value="option2">1</option>
                <option value="option3">2</option>
                <option value="option4">3</option>
                <option value="option4">4</option>
                <option value="option4">5</option>
            </select>
            <h2 style='margin-top: 36px;'>Санвузол</h2>
            <select id="myDropdown" name='addlist-bathroom' class='addlist-AdditionalInformation-select'>
                <option value="option1">Обрати</option>
                <option value="option2">1</option>
                <option value="option3">2</option>
                <option value="option4">3</option>
                <option value="option4">4</option>
                <option value="option4">5</option>
            </select>
            <h2 style='margin-top: 36px;'>Ремонт</h2>
            <select id="myDropdown" name='addlist-repair' class='addlist-AdditionalInformation-select'>
                <option value="option1">Обрати</option>
                <option value="option2">1</option>
                <option value="option3">2</option>
                <option value="option4">3</option>
                <option value="option4">4</option>
                <option value="option4">5</option>
            </select>
            <div class='addlist-AdditionalInformation-animal'>
                <h4>Домашні улюбленці</h4>
                <div class='addlist-AdditionalInformation-animal-block'>
                    <div class='addlist-AdditionalInformation-animal-ruv'>
                        <input type='checkbox' value='Ні' name='addlist-animal1' class='animal-input' />
                        <h5 class='animal-text1' style='margin-top: 11px;'>Ні</h5>
                    </div>
                    <div class='addlist-AdditionalInformation-animal-ruv'>
                        <input type='checkbox' value='Так, середній песик (до 25кг)' name='addlist-animal2' class='animal-input' style='margin-left: 35px;' />
                        <h5 class='animal-text2'>Так, середній<br>песик (до 25кг)</h5>
                    </div>
                </div>
                <div class='addlist-AdditionalInformation-animal-block' style='margin-top: 26px; margin-bottom: 26px;'>
                    <div class='addlist-AdditionalInformation-animal-ruv'>
                        <input type='checkbox' value='Так, котик' name='addlist-animal3' class='animal-input' />
                        <h5 class='animal-text1' style='margin-top: 11px;'>Так, котик</h5>
                    </div>
                    <div class='addlist-AdditionalInformation-animal-ruv'>
                        <input type='checkbox' value='Так, великий песик' name='addlist-animal4' class='animal-input' style='margin-left: 35px;' />
                        <h5 class='animal-text2'>Так, великий<br>песик</h5>
                    </div>
                </div>
                <div class='addlist-AdditionalInformation-animal-block'>
                    <div class='addlist-AdditionalInformation-animal-ruv'>
                        <input type='checkbox' value='Так, інша тваринка' name='addlist-animal5' class='animal-input' />
                        <h5 class='animal-text1'>Так, інша<br>тваринка</h5>
                    </div>
                    <div class='addlist-AdditionalInformation-animal-ruv'>
                        <input type='checkbox' value='Так, маленький песик (до 10кг)' name='addlist-animal6' class='animal-input' style='margin-left: 35px;' />
                        <h5 class='animal-text2'>Так, маленький<br>песик (до 10кг)</h5>
                    </div>
                </div>
            </div>
            <h2 style='margin-top: 36px;'>Меблювання</h2>
            <div class='addlist-AdditionalInformation-typelist-block'>
                <div id="info-furniture-1" class='addlist-AdditionalInformation-typelist-private'>З меблями</div>
                <div id="info-furniture-2" class='addlist-AdditionalInformation-typelist-business' style='margin-left: 10px;'>Без меблів</div>
            </div>
            <h2 style='margin-top: 36px;'>Wi-fi</h2>
            <div class='addlist-AdditionalInformation-typelist-block'>
                <div id="info-wifi-1" class='addlist-AdditionalInformation-typelist-private'>З Wi-fi</div>
                <div id="info-wifi-2" class='addlist-AdditionalInformation-typelist-business' style='margin-left: 10px;'>Без Wi-fi</div>
            </div>
        </div>
    </div>
    <div class='addlist-autocomlete-block'>
        <div class='addlist-autocomlete'>
            <div class='addlist-autocomlete-title-block'>
                <div class='addlist-autocomlete-title'>
                    <img src='image/addlist-autocomlete.png' />
                    <h1>Автопродовження</h1>
                </div>
                <h2>Оголошення буде деактивовано через 30 днів</h2>
            </div>
            <div class='addlist-autocomlete-title-checkbox'></div>
        </div>
    </div>
    <div class='addlist-location-block'>
        <div class='addlist-location'>
            <h1>Місцезнаходження*</h1>
            <input type='text' name='addlist-location' class='addlist-location-input' placeholder='Назва міста й індекс'/>
        </div>
    </div>
    <div class='addlist-contact-block'>
        <div class='addlist-contact'>
            <h1>Ваші контактні дані</h1>
            <h2>Контактна особа*</h2>
            <input type='text' name='addlist-contact' placeholder='Ім’я'/>
            <h2>Пошта</h2>
            <input type='text' name='addlist-mail' placeholder='Email'/>
            <h2>Номер телефона</h2>
            <input type='text' name='addlist-phone' placeholder='+38'/>
        </div>
    </div>
    <div class='addlist-function-block'>
        <div class='addlist-function'>
            <a href='index.php'><h1>Назад</h1></a>
            <div class='addlist-function-nextbutton'>Опублікувати</div>
        </div>
    </div>
    </form>
    
    <?php
        include('footer.php');
    ?>
<script src="script/addlist_number.js"></script>
<script src="script/addlist_activeblock.js"></script>
<script>
        let uploadedImages = [];

        document.querySelector('.addlist-image-addbutton').addEventListener('click', function() {
            document.getElementById('fileInput').click();
        });

        document.getElementById('fileInput').addEventListener('change', function(event) {
            var file = event.target.files[0];
            if (!file) return;

            var formData = new FormData();
            formData.append('image', file);

            fetch('server/upload.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    uploadedImages.push(data.fileName);
                    var imageUrl = data.filePath;
                    var emptyImageBlocks = document.querySelectorAll('.addlist-image-list-image-block .addlist-image-list-image[style*="image/addlist-image.png"]');
                    if (emptyImageBlocks.length > 0) {
                        emptyImageBlocks[0].style.backgroundImage = 'url(' + imageUrl + ')';
                    } else {
                        alert('Немає місця для загрузки ще фотографій.');
                    }
                } else {
                    alert('Помилка.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Помилка.');
            });
        });

        document.querySelector('.addlist-function-nextbutton').addEventListener('click', function() {
            var form = document.getElementById('addlistForm');
            var formData = new FormData(form);
            
            var activeFurniture = document.querySelector('.addlist-AdditionalInformation-typelist-private.active, .addlist-AdditionalInformation-typelist-business.active');
            var activeWifi = document.querySelector('.addlist-AdditionalInformation-typelist-private.active, .addlist-AdditionalInformation-typelist-business.active');
            var activeType = document.querySelector('.addlist-AdditionalInformation-typelist-private.active, .addlist-AdditionalInformation-typelist-business.active');

            if (activeFurniture) formData.append('activeFurniture', activeFurniture.textContent);
            if (activeWifi) formData.append('activeWifi', activeWifi.textContent);
            if (activeType) formData.append('activeType', activeType.textContent);

            formData.append('uploadedImages', JSON.stringify(uploadedImages));

            fetch('server/submit.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Успіх.');
                } else {
                    alert('Помилка.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Помилка.');
            });
        });
    </script>
</body>
</html>
