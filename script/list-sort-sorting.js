
/* Скрипт для сортування оголошень по ціні, відстані і популярності */

function log(message) {
    console.log(message);
}

document.querySelectorAll('input[name="option"]').forEach(radio => {
    radio.addEventListener('change', function() {
        log(`Selected: ${this.id}`);
        sortItems(this.id);
    });
});

document.querySelectorAll('.list-sort-label span').forEach(span => {
    span.addEventListener('click', function() {
        const input = this.previousElementSibling;
        if (input && input.type === 'radio') {
            input.checked = true;
            log(`Selected by span: ${input.id}`);
            sortItems(input.id);
        }
    });
});

function sortItems(criteria) {
    const container = document.querySelector('.list-recommendations');
    const items = Array.from(container.getElementsByClassName('recommendations-list-block'));

    log(`Sorting by: ${criteria}`);
    log(`Items before sorting: ${items.length}`);

    if (criteria === 'price-desc' || criteria === 'price-asc') {
        items.sort((a, b) => {
            const priceA = parseInt(a.querySelector('.recommendations-list-price').id);
            const priceB = parseInt(b.querySelector('.recommendations-list-price').id);
            log(`Comparing prices: ${priceA} and ${priceB}`);
            return criteria === 'price-desc' ? priceB - priceA : priceA - priceB;
        });
    } else if (criteria === 'distance') {
        items.sort((a, b) => {
            const distanceA = parseFloat(a.querySelector('.recommendations-list-info').id);
            const distanceB = parseFloat(b.querySelector('.recommendations-list-info').id);
            log(`Comparing distances: ${distanceA} and ${distanceB}`);
            return distanceA - distanceB;
        });
    } else if (criteria === 'popularity') {
        items.sort((a, b) => {
            const priceA = parseInt(a.querySelector('.recommendations-list-price').id);
            const priceB = parseInt(b.querySelector('.recommendations-list-price').id);
            const distanceA = parseFloat(a.querySelector('.recommendations-list-info').id);
            const distanceB = parseFloat(b.querySelector('.recommendations-list-info').id);

            if (priceA !== priceB) {
                return priceA - priceB;
            } else {
                return distanceA - distanceB;
            }
        });
    }

    container.innerHTML = '';
    items.forEach(item => container.appendChild(item));

    log(`Items after sorting: ${items.length}`);
}