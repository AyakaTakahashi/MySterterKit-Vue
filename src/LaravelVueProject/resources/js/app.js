import './bootstrap';
import { createApp } from 'vue';
import router from './router';
import vuetify from "./vuetify";
import DashboardComponent from "./components/Dashboard.vue";
import HeaderComponent from "./components/Header.vue";
import AppComponent from "./components/App.vue";

const app = createApp({});

app.use(router);
app.use(vuetify);

app.component('app-component', AppComponent);
app.component('dashboard-component', DashboardComponent);

app.mount('#app');
