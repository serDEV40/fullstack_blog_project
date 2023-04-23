import { createApp } from 'vue';
import App from './App.vue';
import { routers } from './routers'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import './assets/main.css';

createApp(App).use(routers).component('font-awesome-icon',FontAwesomeIcon).mount('#app');