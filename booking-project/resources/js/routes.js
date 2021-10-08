import VueRouter from "vue-router";
import Bookables from "./bookingComponents/Bookables.vue";
import Test from "./components/Test.vue";

const routes = [
    {
        path: "/",
        component: Bookables,
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
