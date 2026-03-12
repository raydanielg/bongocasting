import './bootstrap';

import Alpine from 'alpinejs';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import Masonry from 'masonry-layout';
import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";
import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import { CountUp } from 'countup.js';

window.Alpine = Alpine;
window.gsap = gsap;
window.ScrollTrigger = ScrollTrigger;
window.Masonry = Masonry;
window.Fancybox = Fancybox;
window.Swiper = Swiper;
window.CountUp = CountUp;

gsap.registerPlugin(ScrollTrigger);

// Initialize Swiper Modules
Swiper.use([Navigation, Pagination, Autoplay]);

// Initialize Fancybox
Fancybox.bind("[data-fancybox]", {
    // Custom options
});

Alpine.start();
