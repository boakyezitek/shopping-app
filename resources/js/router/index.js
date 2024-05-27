import { createRouter, createMemoryHistory } from "vue-router"

import HomePage from "../pages/HomePage.vue"
import AboutPage from "../components/AboutPage.vue"
import NotFoundPage from "../components/NotFoundPage.vue"
import ProductDetailsPage from "../pages/ProductDetailsPage.vue"
import InvoicePage from "../pages/InvoicePage.vue"



const routes = [
 {
    path: "/",
    component: HomePage
 },
 {
    path: "/invoice",
    component: InvoicePage
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
