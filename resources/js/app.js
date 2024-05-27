import './bootstrap';

import { createApp } from 'vue';
import { createPinia } from 'pinia'
import router from './router';

import App from './pages/App.vue'

/**
 * Creates a new Vue app instance.
 */
const app = createApp(App);

/**
 * Creates a new Pinia store instance.
 */
const pinia = createPinia();

/**
 * Uses the Pinia store instance in the Vue app instance.
 */
app.use(pinia);

/**
 * Uses the Vue Router instance in the Vue app instance.
 */
app.use(router)

/**
 * Mounts the Vue app instance to the DOM.
 */
app.mount('#app');
