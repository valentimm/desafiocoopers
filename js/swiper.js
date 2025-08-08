document.addEventListener('DOMContentLoaded', function () {
    const customPaginationBullets = document.querySelectorAll('.swiper-pagination-custom .swiper-pagination-bullet');

    // Função que atualiza o bullet ativo
    function updateCustomPagination(swiper) {
        const realIndex = swiper.realIndex;
        const activeBulletIndex = realIndex % customPaginationBullets.length;

        // Atualiza as classes
        customPaginationBullets.forEach((bullet, index) => {
            if (index === activeBulletIndex) {
                bullet.classList.add('swiper-pagination-custom-active');
            } else {
                bullet.classList.remove('swiper-pagination-custom-active');
            }
        });
    }

    const swiper = new Swiper('.propaganda-image-container', {
        // Configurações de slides
        slidesPerView: 1,
        slidesPerGroup: 1,
        loop: true,
        spaceBetween: 20,

        // Breakpoint
        breakpoints: {
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },

        pagination: {
            el: '.swiper-pagination-custom',
            clickable: true,

        },
    });
});