/* Скрипт для відображення меню сортування */

document.addEventListener('DOMContentLoaded', function() {
    const sortBlock = document.getElementById('sort-block');
    const toggleContent = document.getElementById('toggle-content');
    const filterIcon = document.getElementById('filter-icon');

    sortBlock.addEventListener('click', function(event) {
        event.stopPropagation(); 
        if (toggleContent.classList.contains('list-sort-hidden')) {
            toggleContent.classList.remove('list-sort-hidden');
            toggleContent.classList.add('list-sort-visible');
        } else {
            toggleContent.classList.remove('list-sort-visible');
            toggleContent.classList.add('list-sort-hidden');
        }
    });

    document.addEventListener('click', function() {
        if (toggleContent.classList.contains('list-sort-visible')) {
            toggleContent.classList.remove('list-sort-visible');
            toggleContent.classList.add('list-sort-hidden');
            sortBlock.classList.remove('active');
        }
    });

    toggleContent.addEventListener('click', function(event) {
        event.stopPropagation();
    });
});