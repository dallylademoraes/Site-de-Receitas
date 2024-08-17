document.addEventListener('DOMContentLoaded', function () {
    const prevButton = document.querySelector('.carousel .prev');
    const nextButton = document.querySelector('.carousel .next');
    const carouselImages = document.querySelector('.carousel-images');
    let index = 0;

    function updateCarousel() {
        const width = carouselImages.clientWidth;
        carouselImages.style.transform = `translateX(-${index * width}px)`;
    }

    prevButton.addEventListener('click', function () {
        index = (index > 0) ? index - 1 : 0;
        updateCarousel();
    });

    nextButton.addEventListener('click', function () {
        const totalImages = carouselImages.children.length;
        index = (index < totalImages - 1) ? index + 1 : totalImages - 1;
        updateCarousel();
    });

    updateCarousel();
});