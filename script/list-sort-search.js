/* Скрипт для пошуку на загальній сторінці з товарами */
 function log(message) {
    console.log(message);
}

document.querySelector('.list-search-input-block input').addEventListener('keypress', function(event) {
    if (event.key === 'Enter') {
        log('Enter pressed in search input');
        filterItems(this.value);
    }
});

document.querySelector('.search-icon').addEventListener('click', function() {
    const input = document.querySelector('.list-search-input-block input');
    log('Search icon clicked');
    filterItems(input.value);
});

function filterItems(query) {
    query = query.toLowerCase();
    const container = document.querySelector('.list-recommendations');
    const items = Array.from(container.getElementsByClassName('recommendations-list-block'));

    log(`Filtering items with query: ${query}`);

    items.forEach(item => {
        const location = item.querySelector('.recommendations-list-location span').textContent.toLowerCase();
        if (location.includes(query)) {
            item.style.display = '';
        } else {
            item.style.display = 'none';
        }
    });
}