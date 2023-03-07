import "./bootstrap";
import { createApp } from "vue";
import ExampleComponent from "./components/ExampleComponent.vue";
import App from "./App.vue";
import router from "./router/index";
import store from "./vuex/store";
// app.component("example-component", ExampleComponent);

const app = createApp(App).use(router).use(store);
app.mount("#app");
// app.use(router);
