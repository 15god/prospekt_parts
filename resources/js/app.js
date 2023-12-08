import './bootstrap';
import { createApp } from "vue";
import PartsTable from "./components/PartsTable.vue";

const app = createApp({
    components: {
        PartsTable,
    }
});

app.mount("#app")
