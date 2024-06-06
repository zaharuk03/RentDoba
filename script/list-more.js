/* Скрипт для відображення більше позицій товарів на загальній сторінці */

document.addEventListener("DOMContentLoaded", function() {
    let items = document.querySelectorAll('.recommendations-list-block');
    let itemsToShow = 8;
    let currentIndex = 0;

    function showItems() {
        for (let i = currentIndex; i < currentIndex + itemsToShow && i < items.length; i++) {
            items[i].style.display = 'block';
        }
        currentIndex += itemsToShow;

        if (currentIndex >= items.length) {
            document.querySelector('.list-loaded').style.display = 'none';
        }
    }

    items.forEach((item, index) => {
        item.style.display = 'none';
    });

    showItems();

    document.querySelector('.list-loaded').addEventListener('click', showItems);
});