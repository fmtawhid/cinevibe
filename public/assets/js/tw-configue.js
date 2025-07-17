tailwind.config = {
    theme: {
        extend: {
            fontFamily: {
                josefin: ['"Josefin Sans"', 'sans-serif'],
            },
            transitionProperty: {
                'height': 'height',
                'max-height': 'max-height',
                'spacing': 'margin, padding',
            },
            transitionDuration: {
                '500': '500ms',
                '800': '800ms',
            },
            backgroundImage: {
                'hero-pattern': "url('assets/img/page-banner/about.jpg')",
                'testimonial': "url('assets/img/index/testimonial.jpg')"
            }
        }
    }
}