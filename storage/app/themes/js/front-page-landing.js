(() => {
    // --- Seleksi Elemen DOM ---
    let navbar = document.querySelector(".layout-navbar");
    let heroAnimation = document.getElementById("hero-animation");
    let heroDashboardImages = document.querySelectorAll(".hero-dashboard-img");
    let heroElementImages = document.querySelectorAll(".hero-elements-img");
    let swiperClientsLogos = document.getElementById("swiper-clients-logos");
    let swiperReviews = document.getElementById("swiper-reviews");
    let swiperPrevButton = document.querySelector(".swiper-button-prev");
    let swiperNextButton = document.querySelector(".swiper-button-next");
    let priceDurationToggler = document.querySelector(".price-duration-toggler");
    let monthlyPriceElements = Array.from(document.querySelectorAll(".price-monthly"));
    let yearlyPriceElements = Array.from(document.querySelectorAll(".price-yearly"));

    // --- Efek Animasi 3D pada Hero Section ---
    if (screen.width >= 1200 && heroAnimation) {
        const handleMouseMove = (event) => {
            heroElementImages.forEach(el => {
                el.style.transform = "translateZ(1rem)";
            });
            heroDashboardImages.forEach(el => {
                let t = (window.innerWidth - 2 * event.pageX) / 100;
                el.style.transform = `perspective(1200px) rotateX(${(window.innerHeight - 2 * event.pageY) / 100}deg) rotateY(${t}deg) scale3d(1, 1, 1)`;
            });
        };

        const handleMouseOut = () => {
            heroElementImages.forEach(el => {
                el.style.transform = "translateZ(0)";
            });
            heroDashboardImages.forEach(el => {
                el.style.transform = "perspective(1200px) scale(1) rotateX(0) rotateY(0)";
            });
        };

        heroAnimation.addEventListener("mousemove", handleMouseMove);
        navbar.addEventListener("mousemove", handleMouseMove);
        heroAnimation.addEventListener("mouseout", handleMouseOut);
    }

    // --- Inisialisasi Swiper untuk Reviews ---
    if (swiperReviews) {
        new Swiper(swiperReviews, {
            slidesPerView: 1,
            spaceBetween: 5,
            grabCursor: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            },
            loop: true,
            loopAdditionalSlides: 1,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            breakpoints: {
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 26
                },
                992: {
                    slidesPerView: 2,
                    spaceBetween: 20
                }
            }
        });
    }

    // --- Inisialisasi Swiper untuk Logo Klien ---
    if (swiperClientsLogos) {
        new Swiper(swiperClientsLogos, {
            slidesPerView: 1,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            },
            breakpoints: {
                992: {
                    slidesPerView: 5
                },
                768: {
                    slidesPerView: 3
                }
            }
        });
    }

    // --- Logika untuk Toggle Harga (Bulanan/Tahunan) ---
    document.addEventListener("DOMContentLoaded", function(e) {
        function togglePriceDisplay() {
            if (priceDurationToggler.checked) {
                // Tampilkan harga tahunan, sembunyikan bulanan
                yearlyPriceElements.forEach(el => el.classList.remove("d-none"));
                monthlyPriceElements.forEach(el => el.classList.add("d-none"));
            } else {
                // Tampilkan harga bulanan, sembunyikan tahunan
                yearlyPriceElements.forEach(el => el.classList.add("d-none"));
                monthlyPriceElements.forEach(el => el.classList.remove("d-none"));
            }
        }
        // Panggil fungsi saat halaman dimuat
        togglePriceDisplay();

        // Panggil fungsi setiap kali toggle diubah
        priceDurationToggler.onchange = function() {
            togglePriceDisplay();
        };
    });
})();
