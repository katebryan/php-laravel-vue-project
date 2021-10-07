import VueRouter from "vue-router";
import ExampleComponent from "./components/ExampleComponent.vue";
import Test from "./components/Test.vue";

const routes = [
    {
        path: "/",
        component: ExampleComponent,
        name: "home"
    },
    {
        path: "/test",
        component: Test,
        name: "test"
    }
];

const router = new VueRouter({
    routes,
    mode: "history"
});

export default router;
