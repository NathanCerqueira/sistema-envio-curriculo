import { createRouter, createWebHashHistory } from 'vue-router'
import Candidatura from "@/views/Candidatura";
import TrabalheConosco from "@/views/TrabalheConosco";
const routes = [
  {
    path: '/',
    name: 'Candidatura',
    component: Candidatura
  },
  {
    path: '/trabalhe-conosco',
    name: 'TrabalheConosco',
    component: TrabalheConosco
  }
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router
