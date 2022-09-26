import './bootstrap';
import { createApp } from 'vue';
import App from './layouts/App.vue'
// import router from './router.js'
const app = createApp(App ,{});


// Object.entries(import.meta.globEager('./components/base/*.vue')).forEach(([path, definition]) => {
//     app.component(`Base${path.split('/').pop().replace(/\.\w+$/, '')}`, definition.default);
// });

// app.use(router)
app.mount('#app');
