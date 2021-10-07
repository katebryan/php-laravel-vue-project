import VueRouter from "vue-router";
import ExampleComponent from "./components/ExampleComponent.vue";

const routes = [
    {
        path: "/",
        component: ExampleComponent
    }
];

const router = new VueRouter({
    routes
});

export default router;
