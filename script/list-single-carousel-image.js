/* Скрипт для каруселі зображень */

const images = ['image/list/1.png', 'image/list/2.png', 'image/list/3.png'];
    let currentIndex = 0;
    function showImage(index) {
        const imgElement = document.getElementById('carousel-image');
        imgElement.src = images[index];

        const dots = document.getElementsByClassName('dot');
        for (let i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(' active', '');
        }
        dots[index].className += ' active';

        updateArrows();
    }
    function nextImage() {
        if (currentIndex < images.length - 1) {
            currentIndex++;
            showImage(currentIndex);
        }
    }
    function prevImage() {
        if (currentIndex > 0) {
            currentIndex--;
            showImage(currentIndex);
        }
    }
    function createDots() {
        const dotsContainer = document.getElementById('dots-container');
        for (let i = 0; i < images.length; i++) {
            const dot = document.createElement('div');
            dot.className = 'dot';
            dot.addEventListener('click', () => showImage(i));
            dotsContainer.appendChild(dot);
        }
    }
    function updateArrows() {
        const leftArrow = document.getElementById('left-arrow');
        const rightArrow = document.getElementById('right-arrow');
        if (currentIndex === 0) {
            leftArrow.style.background = "url('image/list-single-body-image-arrow1.png')";
            leftArrow.style.transform = "rotate(0deg)";
            leftArrow.onclick = null;
        } else {
            leftArrow.style.background = "url('image/list-single-body-image-arrow2.png')";
            leftArrow.style.transform = "rotate(180deg)";
            leftArrow.onclick = prevImage;
        }
        if (currentIndex === images.length - 1) {
            rightArrow.style.background = "url('image/list-single-body-image-arrow1.png')";
            rightArrow.style.transform = "rotate(180deg)";
            rightArrow.onclick = null;
        } else {
            rightArrow.style.background = "url('image/list-single-body-image-arrow2.png')";
            rightArrow.style.transform = "rotate(0deg)";
            rightArrow.onclick = nextImage;
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        createDots();
        showImage(currentIndex);
    });