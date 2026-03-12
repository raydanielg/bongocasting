import './bootstrap';

import Alpine from 'alpinejs';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import Masonry from 'masonry-layout';
import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";

window.Alpine = Alpine;
window.gsap = gsap;
window.ScrollTrigger = ScrollTrigger;
window.Masonry = Masonry;
window.Fancybox = Fancybox;

gsap.registerPlugin(ScrollTrigger);

// Initialize Fancybox
Fancybox.bind("[data-fancybox]", {
    // Custom options
});

Alpine.start();
