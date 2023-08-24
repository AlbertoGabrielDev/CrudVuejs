import './bootstrap';

import {createApp} from 'vue';
import App from './components/App.vue';
import Index from './components/Index.vue';

const app = createApp();

app.component('app',App);
// app.component('index',Index)



app.mount('#app');