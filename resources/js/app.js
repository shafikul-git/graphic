// Import dependencies
import './bootstrap';

/*
  Add custom scripts here
*/
import.meta.glob([
  '../assets/img/**',
  // '../assets/json/**',
  '../assets/vendor/fonts/**'
]);


// Import Alpine
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();
