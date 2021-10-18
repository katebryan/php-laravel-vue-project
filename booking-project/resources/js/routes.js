import VueRouter from "vue-router";
import Bookables from "./components/Bookables.vue";
import Property from "./components/Property.vue";

const routes = [
    {
        path: "/",
        component: Bookables,
        name: "home"
    },
    {
        path: "/property/:id",
        component: Property,
        name: "property"
    }
];

const router = new VueRouter({
    routes,
    mode: "history"
});

export default router;
