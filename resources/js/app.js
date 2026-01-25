import './bootstrap';
document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.querySelector('#categories-carousel > div');
    const prevBtn = document.getElementById('carousel-prev');
    const nextBtn = document.getElementById('carousel-next');
    
    let currentIndex = 0;
    const items = carousel.children;
    
    function getItemsPerView() {
        const width = window.innerWidth;
        if (width >= 1024) return 4; // lg
        if (width >= 768) return 3;  // md
        if (width >= 640) return 2;  // sm
        return 1;                     // mobile
    }
    
    function updateCarousel() {
        const itemsPerView = getItemsPerView();
        const itemWidth = 100 / itemsPerView;
        const offset = -(currentIndex * itemWidth);
        carousel.style.transform = `translateX(${offset}%)`;
    }
    
    nextBtn.addEventListener('click', () => {
        const itemsPerView = getItemsPerView();
        const maxIndex = items.length - itemsPerView;
        if (currentIndex < maxIndex) {
            currentIndex++;
            updateCarousel();
        }
    });
    
    prevBtn.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateCarousel();
        }
    });
    
    // Update on window resize
    window.addEventListener('resize', () => {
        const itemsPerView = getItemsPerView();
        const maxIndex = items.length - itemsPerView;
        if (currentIndex > maxIndex) {
            currentIndex = maxIndex;
        }
        updateCarousel();
    });
});
