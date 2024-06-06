<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vintoniak.pl</title>
    <link rel="icon" type="image/x-icon" href="" />
    <link rel="stylesheet" href="style/style-all.css" />
    <link rel="stylesheet" href="style/style-header.css" />
    <link rel="stylesheet" href="style/style-list.css" />
    <link rel="stylesheet" href="style/style-footer.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200..900&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include('header.php');
    ?>
   
    <div class='list-search-block'>
        <div class='list-search'>
            <div class='list-search-input-block'>
                <input type='text' placeholder='Куди плануєте ?' />
                <div class='search-icon'></div>
            </div>
            
            <a href='add_new-list.php'><div class='list-search-button'>Додати оголошення</div></a>
            <div class='list-search-filter-block'>
                <div class='list-search-filter-icon'>
                    <div style='width: 14px; height: 16px; background: url("image/filter3.png"); background-size: cover; background-position: center; background-repeat: no-repeat;'></div>
                </div>
                <h2>Карта</h2>
            </div>
            <div class='list-search-filter-block' onclick="toggleFilterBlock()">
                <div class='list-search-filter-icon'>
                    <div style='width: 24px; height: 24px; background: url("image/filter2.png"); background-size: cover; background-position: center; background-repeat: no-repeat;'></div>
                </div>
                    <h2>Фільтр</h2>
            </div>
            <div class='list-search-filter-block' id="sort-block">
                <div class='list-search-filter-icon'>
                    <div style='width: 14px; height: 18px; background: url("image/filter1.png"); background-size: cover; background-position: center; background-repeat: no-repeat;'></div>
                </div>
                <h2>Сортувати</h2>
            </div>
        </div>
        <div id="toggle-content" class="list-sort-block list-sort-hidden">
            <div class="list-sort-label-block">
                <form>
                    <div class='list-sort-label'>
                        <input type="radio" name="option" class="custom-radio" id="popularity">
                        <span>Рекомендовані</span>
                    </div>
                    <div class='list-sort-label' style='margin-top:24px;'>
                        <input type="radio" name="option" class="custom-radio" id="price-desc">
                        <span>Ціна (спочатку найвища)</span>
                    </div>
                    <div class='list-sort-label' style='margin-top:24px;'>
                        <input type="radio" name="option" class="custom-radio" id="price-asc">
                        <span>Ціна (спочатку найнижча)</span>
                    </div>
                    <div class='list-sort-label' style='margin-top:24px;'>
                        <input type="radio" name="option" class="custom-radio" id="distance">
                        <span>Відстань від центру</span>
                    </div>
                </form>
            </div>
        </div>
    </div>
   

    <div class='list-recommendations-block'>
        <div class="list-recommendations">
            <div class='recommendations-list-block' data-rooms="2" data-beds="1" data-baths="1" data-wifi="true" data-pets="false" data-no-wifi="false" data-smoking="false">
                <a href='list-single.php'>   
                    <div class='recommendations-list-image' style='background:url("image/1.png"); background-size: cover;'>
                        <div class='recommendations-list-price' id='27800'>27 800 ₴</div>
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
                        <div class='recommendations-list-info' id='2' style='margin-left:18px'>2км від центру</div>
                        <div class='recommendations-list-info' style='margin-left:7px'>36м²</div>
                    </div>
                </a>
            </div>
           

            <div class='recommendations-list-block' data-rooms="2" data-beds="2" data-baths="2" data-wifi="true" data-pets="false" data-no-wifi="true" data-smoking="false">
                <div class='recommendations-list-image' style='background:url("image/2.png"); background-size: cover;'>
                    <div class='recommendations-list-price' id='32800'>32 800 ₴</div>
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
                    <div class='recommendations-list-info' id='4' style='margin-left:18px'>4км від центру</div>
                    <div class='recommendations-list-info' style='margin-left:7px'>86м²</div>
                </div>
            </div>
        </div>
    </div>

    <div class='list-loaded-block'>
        <div class='list-loaded'>Завантажити ще</div>
    </div>
  

    <?php
        include('footer.php');
    ?>

    <div class='list-sort-filters-blur' style="display: none;">
        <div class='list-sort-filters-block'>
            <h1>Фільтрувати</h1>
            <div class='list-sort-filter-price-block'>
                <div class='filter-price'>Ціна</div>
                <div class='filter-price-second'>0 ₴ - 50 000 ₴</div>
                <div class='filter-price-third'>0 - 50 000</div>
                <div class='filter-price-diagram'></div>
                <div class='filter-price-start'>Від 0 ₴</div>
                <div class='filter-price-end'>До 50 000 ₴</div>
            </div>
            <div class='list-sort-filter-room-block'>
                <div class='list-sort-filter-room-h1'>Кількість кімнат</div>
                    <div class='list-sort-filter-room'>
                        <div class='list-sort-filter-set1'>
                            <h2>Кімнати</h2>
                            <div class='filter-set'>
                                <div class='filter-set-minus' onclick="updateRoomCount(-1, 'rooms')"></div>
                                <input type='text' id='rooms' value='0'/>
                                <div class='filter-set-plus' onclick="updateRoomCount(1, 'rooms')"></div>
                            </div>
                        </div>
                        <div class='list-sort-filter-set2'>
                            <h2>Ліжка</h2>
                            <div class='filter-set'>
                                <div class='filter-set-minus' onclick="updateRoomCount(-1, 'beds')"></div>
                                <input type='text' id='beds' value='0'/>
                                <div class='filter-set-plus' onclick="updateRoomCount(1, 'beds')"></div>
                            </div>
                        </div>
                        <div class='list-sort-filter-set3'>
                            <h2>Санвузли</h2>
                            <div class='filter-set'>
                                <div class='filter-set-minus' onclick="updateRoomCount(-1, 'baths')"></div>
                                <input type='text' id='baths' value='0'/>
                                <div class='filter-set-plus' onclick="updateRoomCount(1, 'baths')"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='list-sort-filter-limit-block'>
                    <h2>Обмеження</h2>
                    <div class='list-sort-filter-limit-set' style='float: left;'>
                        <h2>З Wi-Fi</h2>
                        <input type='checkbox' id='wifi'/>
                    </div>
                    <div class='list-sort-filter-limit-set' style='float: right;'>
                        <h2>Можна з тваринами</h2>
                        <input type='checkbox' id='pets'/>
                    </div>
                    <div class='list-sort-filter-limit-set' style='float: left;'>
                        <h2>Без Wi-fi</h2>
                        <input type='checkbox' id='no-wifi'/>
                    </div>
                    <div class='list-sort-filter-limit-set' style='float: right;'>
                        <h2>Можна палити</h2>
                        <input type='checkbox' id='smoking'/>
                    </div>
                </div>
            <h3 onclick="resetFilters()">Скинути</h3>
            <div class='list-sort-filter-submit' onclick="applyFilters()">Застосувати</div>
        </div>
    </div>



    <script src="script/list-more.js"></script>
    <script src="script/list-sort.js"></script>
    <script src="script/list-sort-checked.js"></script>
    <script src="script/list-sort-sorting.js"></script>
    <script src="script/list-sort-search.js"></script>

<script>
    function getFilterValues() {
        return {
            rooms: parseInt(document.getElementById('rooms').value, 10) || null,
            beds: parseInt(document.getElementById('beds').value, 10) || null,
            baths: parseInt(document.getElementById('baths').value, 10) || null,
            wifi: document.getElementById('wifi').checked,
            pets: document.getElementById('pets').checked,
            noWifi: document.getElementById('no-wifi').checked,
            smoking: document.getElementById('smoking').checked,
        };
    }
    function applyFilters() {
        const filters = getFilterValues();
        const items = document.querySelectorAll('.recommendations-list-block');
        items.forEach(item => {
            const price = parseInt(item.querySelector('.recommendations-list-price').dataset.price, 10);
            const rooms = parseInt(item.dataset.rooms, 10);
            const beds = parseInt(item.dataset.beds, 10);
            const baths = parseInt(item.dataset.baths, 10);
            const wifi = item.dataset.wifi === 'true';
            const pets = item.dataset.pets === 'true';
            const noWifi = item.dataset.noWifi === 'true';
            const smoking = item.dataset.smoking === 'true';
            let show = true;
            if ((filters.priceMin && price < filters.priceMin) || (filters.priceMax && price > filters.priceMax)) {
                show = false;
            }
            if (filters.rooms && rooms !== filters.rooms) {
                show = false;
            }
            if (filters.beds && beds !== filters.beds) {
                show = false;
            }
            if (filters.baths && baths !== filters.baths) {
                show = false;
            }
            if (filters.wifi && !wifi) {
                show = false;
            }
            if (filters.pets && !pets) {
                show = false;
            }
            if (filters.noWifi && wifi) {
                show = false;
            }
            if (filters.smoking && !smoking) {
                show = false;
            }
            item.style.display = show ? 'block' : 'none';
        });
        const filterBlock = document.querySelector('.list-sort-filters-blur');
        filterBlock.style.display = 'none';
    }
    function updateRoomCount(change, id) {
        const input = document.getElementById(id);
        let value = parseInt(input.value, 10);
        if (isNaN(value)) {
            value = 0;
        }
        value += change;
        if (value >= 0) {
            input.value = value;
        }
    }
    function resetFilters() {
        document.getElementById('rooms').value = '0';
        document.getElementById('beds').value = '0';
        document.getElementById('baths').value = '0';
        document.getElementById('wifi').checked = false;
        document.getElementById('pets').checked = false;
        document.getElementById('no-wifi').checked = false;
        document.getElementById('smoking').checked = false;
        document.querySelectorAll('.recommendations-list-block').forEach(item => {
            item.style.display = 'block';
        });
    }
    function toggleFilterBlock() {
        const filterBlock = document.querySelector('.list-sort-filters-blur');
        if (filterBlock.style.display === 'none' || filterBlock.style.display === '') {
            filterBlock.style.display = 'block';
        } else {
            filterBlock.style.display = 'none';
        }
    }
    document.addEventListener('DOMContentLoaded', () => {

    });
</script>


</body>
</html>
