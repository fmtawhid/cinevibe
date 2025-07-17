// Mobile menu toggle with animation
const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');
const menuIcon = document.getElementById('menu-icon');
const closeIcon = document.getElementById('close-icon');

mobileMenuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('open');

    // Toggle hamburger/close icon
    if (mobileMenu.classList.contains('open')) {
        menuIcon.classList.add('hidden');
        closeIcon.classList.remove('hidden');
    } else {
        menuIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
    }
});

// Mobile dropdown functionality with animation
const dropdownButtons = document.querySelectorAll('.mobile-dropdown-btn');

dropdownButtons.forEach(button => {
    button.addEventListener('click', () => {
        const dropdownContent = button.nextElementSibling;
        const arrow = button.querySelector('.dropdown-arrow');

        // Close all other dropdowns
        document.querySelectorAll('.mobile-dropdown-content').forEach(content => {
            if (content !== dropdownContent && content.classList.contains('open')) {
                content.classList.remove('open');
                content.previousElementSibling.querySelector('.dropdown-arrow').classList.remove('rotate-180');
            }
        });

        // Toggle current dropdown
        dropdownContent.classList.toggle('open');
        arrow.classList.toggle('rotate-180');
    });
});

// Close dropdowns when clicking outside
document.addEventListener('click', (e) => {
    if (!e.target.closest('.mobile-dropdown-btn') && !e.target.closest('.mobile-dropdown-content')) {
        document.querySelectorAll('.mobile-dropdown-content').forEach(content => {
            content.classList.remove('open');
            const arrow = content.previousElementSibling.querySelector('.dropdown-arrow');
            if (arrow) arrow.classList.remove('rotate-180');
        });
    }
});

$(document).ready(function () {
    $('.slider-hero').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false,
        dots: false,
        fade: true,
    });

    $('.slider-click-watch').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        dots: false
    });

    $('.slider-testimonials').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: false,
        dots: false,
        // fade: true,
        cssEase: 'linear'
    });
});