import Swiper from "swiper";
import {
    Navigation,
    Pagination,
    Autoplay,
    Keyboard,
    A11y,
} from "swiper/modules";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

export const worksSwiper = new Swiper(".student-works-swiper", {
    modules: [Navigation, Pagination, Autoplay, Keyboard, A11y],
    loop: true,
    autoHeight: false,
    spaceBetween: 24,
    keyboard: { enabled: true },
    a11y: {
        enabled: true,
        prevSlideMessage: "Previous slide",
        nextSlideMessage: "Next slide",
        firstSlideMessage: "This is the first slide",
        lastSlideMessage: "This is the last slide",
        paginationBulletMessage: "Go to slide {{index}}",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
        dynamicMainBullets: 3,
    },
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
    },
    breakpoints: {
        0: { slidesPerView: 1, spaceBetween: 16 },
        640: { slidesPerView: 2, spaceBetween: 20 },
        1024: { slidesPerView: 4, spaceBetween: 24 },
    },
    observer: true,
    observeParents: true,
});

export const reviewSwiper = new Swiper(".swiper-review", {
    modules: [Navigation, Pagination, A11y],
    slidesPerView: 1.5,
    spaceBetween: 24,
    speed: 500,
    grabCursor: true,
    loop: true,
    autoHeight: false,
    breakpoints: {
        0: { slidesPerView: 1.05, spaceBetween: 16 },
        640: { slidesPerView: 1.25, spaceBetween: 20 },
        1024: { slidesPerView: 1.5, spaceBetween: 24 },
    },
    navigation: { nextEl: ".review-next", prevEl: ".review-prev" },
    pagination: { el: ".review-pagination", clickable: true },
    on: {
        init() {
            requestAnimationFrame(stickMascotToActive);
        },
        slideChangeTransitionEnd() {
            requestAnimationFrame(stickMascotToActive);
        },
        resize() {
            requestAnimationFrame(stickMascotToActive);
        },
    },
});

function stickMascotToActive() {
    const anchor = document.getElementById("reviews-stack");
    const mascot = document.getElementById("mascot-review");
    const swiperEl = document.querySelector(".swiper-review");
    if (!anchor || !mascot || !swiperEl) return;

    const active = swiperEl.querySelector(".swiper-slide-active");
    const card = active?.querySelector("article") || active;
    if (!card) return;

    const aRect = anchor.getBoundingClientRect();
    const cRect = card.getBoundingClientRect();

    const Y_OFFSET =
        window.innerWidth >= 1024
            ? -156
            : window.innerWidth >= 640
            ? -138
            : -70;

    const X_OFFSET =
        window.innerWidth >= 1024
            ? -130
            : window.innerWidth >= 640
            ? -110
            : -40;

    mascot.style.top = `${cRect.top - aRect.top + Y_OFFSET}px`;
    mascot.style.left = `${cRect.left - aRect.left + X_OFFSET}px`;
}

window.addEventListener("load", () =>
    requestAnimationFrame(stickMascotToActive)
);
window.addEventListener("orientationchange", () =>
    setTimeout(stickMascotToActive, 50)
);
const firstImg = document.querySelector(".swiper-review .swiper-slide img");
if (firstImg && !firstImg.complete) {
    firstImg.addEventListener(
        "load",
        () => requestAnimationFrame(stickMascotToActive),
        { once: true }
    );
}

export const tutorsSwiper = new Swiper(".swiper-tutors", {
    modules: [Navigation, Pagination, A11y],
    speed: 500,
    grabCursor: true,
    loop: true,
    centeredSlides: false,
    spaceBetween: 20,

    // default mobile
    slidesPerView: 1.2,
    slidesOffsetBefore: 0,
    slidesOffsetAfter: 12,

    breakpoints: {
        640: { slidesPerView: 1.6, spaceBetween: 16, slidesOffsetAfter: 16 },
        1024: { slidesPerView: 2.5, spaceBetween: 20, slidesOffsetAfter: 24 }, // 2.5 di lg+
    },
    navigation: { nextEl: ".tutors-next", prevEl: ".tutors-prev" },
    pagination: { el: ".tutors-pagination", clickable: true },
    on: {
        // init() {
        //     requestAnimationFrame(stickMascotTutorToActive);
        // },
        // slideChangeTransitionEnd() {
        //     requestAnimationFrame(stickMascotTutorToActive);
        // },
        // resize() {
        //     requestAnimationFrame(stickMascotTutorToActive);
        // },
    },
});

// function stickMascotTutorToActive() {
//     const anchor = document.getElementById("tutors-stack");
//     const mascot = document.getElementById("mascot-tutor");
//     const swiperEl = document.querySelector(".swiper-tutors");
//     if (!anchor || !mascot || !swiperEl) return;

//     const active = swiperEl.querySelector(".swiper-slide-active");
//     const card = active?.querySelector("article") || active;
//     if (!card) return;

//     const aRect = anchor.getBoundingClientRect();
//     const cRect = card.getBoundingClientRect();

//     const Y_OFFSET =
//         window.innerWidth >= 1024
//             ? -156
//             : window.innerWidth >= 640
//             ? -138
//             : -70;

//     const X_OFFSET =
//         window.innerWidth >= 1024
//             ? -130
//             : window.innerWidth >= 640
//             ? -110
//             : -40;

//     mascot.style.top = `${cRect.top - aRect.top + Y_OFFSET}px`;
//     mascot.style.left = `${cRect.left - aRect.left + X_OFFSET}px`;
// }

// window.addEventListener("load", () =>
//     requestAnimationFrame(stickMascotTutorToActive)
// );
// window.addEventListener("orientationchange", () =>
//     setTimeout(stickMascotTutorToActive, 50)
// );
// const firstImgTutor = document.querySelector(
//     ".swiper-tutors .swiper-slide img"
// );
// if (firstImgTutor && !firstImgTutor.complete) {
//     firstImgTutor.addEventListener(
//         "load",
//         () => requestAnimationFrame(stickMascotTutorToActive),
//         { once: true }
//     );
// }

export const booksSwiper = new Swiper(".books-swiper", {
    modules: [Navigation, Pagination, A11y],
    speed: 500,
    grabCursor: true,
    loop: false,
    centeredSlides: false,
    spaceBetween: 24,

    // 1 halaman = 1 grid (4x4 di desktop)
    slidesPerView: 1,

    navigation: {
        nextEl: ".books-next",
        prevEl: ".books-prev",
    },

    pagination: {
        el: ".books-pagination",
        clickable: true,
    },
});

// Paket Swiper
export const paketSwiper = new Swiper(".swiper-paket", {
    modules: [Navigation, Pagination, A11y],
    speed: 500,
    grabCursor: true,
    loop: false,
    centeredSlides: false,
    spaceBetween: 20,

    // default mobile
    slidesPerView: 1.2,
    slidesOffsetBefore: 0,
    slidesOffsetAfter: 12,

    breakpoints: {
        640: { slidesPerView: 1.6, spaceBetween: 16, slidesOffsetAfter: 16 },
        1024: { slidesPerView: 2.5, spaceBetween: 20, slidesOffsetAfter: 24 }, // 2.5 di lg+
    },
    navigation: { nextEl: ".paket-next", prevEl: ".paket-prev" },
    pagination: { el: ".paket-pagination", clickable: true },
    on: {
    },
});