import { createRouter, createWebHistory } from 'vue-router'
import Homepage from '@/views/Homepage.vue'
import About from '@/views/About.vue'
import Product1 from '@/views/products/Product1.vue'

const routes = [
    { path: '/', name: 'Homepage', component: Homepage },
    { path: '/products/1-invoicing-system-in-google-sheets', name: 'Product1', component: Product1 },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router