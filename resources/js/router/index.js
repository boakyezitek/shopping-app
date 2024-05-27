import { createRouter, createMemoryHistory } from "vue-router"

import HomePage from "../pages/HomePage.vue"
import NotFoundPage from "../components/NotFoundPage.vue"
import ProductDetailsPage from "../pages/ProductDetailsPage.vue"
import InvoicePage from "../pages/InvoicePage.vue"
import InvoiceDetailPage from "../pages/InvoiceDetailPage.vue"
import CartPage from "../pages/CartPage.vue"



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
 },
 {
    path: "/invoice/:id",
    component: InvoiceDetailPage
 },
 {
    path: "/carts",
    component: CartPage
 },
]

const router = createRouter({
    history: createMemoryHistory(),
    linkExactActiveClass: 'active',
    routes,
})

export default router;
