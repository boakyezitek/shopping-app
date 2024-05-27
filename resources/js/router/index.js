import { createRouter, createMemoryHistory } from "vue-router"

import HomePage from "../pages/HomePage.vue"
import AboutPage from "../components/AboutPage.vue"
import NotFoundPage from "../components/NotFoundPage.vue"
import ProductDetailsPage from "../pages/ProductDetailsPage.vue"



const routes = [
 {
    path: "/",
    component: HomePage
 },
 {
    path: "/about",
    component: AboutPage
 },
 {
    path: "/products/:id",
    component: ProductDetailsPage
 },
 {
    path: "/:pathMatch(.*)*",
    component: NotFoundPage
 }
]

const router = createRouter({
    history: createMemoryHistory(),
    routes,
})

export default router;
