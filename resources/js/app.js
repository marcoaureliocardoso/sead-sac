import './bootstrap';

import * as bootstrap from 'bootstrap';
import * as popper from '@popperjs/core';
import * as jquery from 'jquery';

/* try {
    window.Popper = popper;
    window.$ = window.jQuery = jquery;*/
    window.bootstrap = bootstrap;
/*} catch (e) {
    console.log("Erro ao carregar popper ou jquery.");
} */

import.meta.glob([
    '../images/**',
]);

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
