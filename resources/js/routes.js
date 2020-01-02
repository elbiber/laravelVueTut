import VueRouter from 'vue-router'
import Simulator from './components/Simulator'
import Items from './components/Items'

const routes = [
    {
        path: '/',
        name: 'simulator',
        component: Simulator
    },
    {
        path: '/items',
        name: 'items',
        component: Items
    }
]

const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
})

export default router
