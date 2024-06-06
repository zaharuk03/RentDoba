/* Скрипт для взаємодії тексту з input radio */

document.addEventListener('DOMContentLoaded', function() {
    const labels = document.querySelectorAll('.list-sort-label');

    labels.forEach(label => {
        const radioInput = label.querySelector('input[type="radio"]');
        const span = label.querySelector('span');

        span.addEventListener('click', () => {
            radioInput.checked = true;
        });
    });
});