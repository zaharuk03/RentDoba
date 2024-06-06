/* Активні блоки */
document.addEventListener('DOMContentLoaded', function() {
    function toggleActive(event) {
        const parent = event.target.parentElement;
        const children = parent.children;
        for (let child of children) {
            child.classList.remove('active');
        }
    event.target.classList.add('active');
    }

    const typeElements = document.querySelectorAll('#info-type-1, #info-type-2');
        for (let element of typeElements) {
            element.addEventListener('click', toggleActive);
        }
    const furnitureElements = document.querySelectorAll('#info-furniture-1, #info-furniture-2');
        for (let element of furnitureElements) {
            element.addEventListener('click', toggleActive);
        }
    const wifiElements = document.querySelectorAll('#info-wifi-1, #info-wifi-2');
        for (let element of wifiElements) {
            element.addEventListener('click', toggleActive);
        }
});