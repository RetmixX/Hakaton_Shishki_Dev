import { createApp } from "vue";
import { createPinia } from "pinia";
import PrimeVue from 'primevue/config';
import Dialog from 'primevue/dialog';
import SelectButton from 'primevue/selectbutton';
import "primevue/resources/primevue.min.css";
import "primeicons/primeicons.css";
import "primevue/resources/themes/lara-light-indigo/theme.css";
import Accordion from 'primevue/accordion';
import AccordionTab from 'primevue/accordiontab';


import App from "./App.vue";
import router from "./router";

import "./assets/main.css";

const app = createApp(App);

app.use(createPinia());
app.use(router);
app.use(PrimeVue);

app.component('Dialog', Dialog);
app.component('SelectButton', SelectButton);
app.component('Accordion', Accordion);
app.component('AccordionTab', AccordionTab);

app.mount("#app");
