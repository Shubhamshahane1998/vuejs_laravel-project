import { createRouter, createWebHistory } from 'vue-router'
// import HomeView from '../views/HomeView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    // {
    //   path: '/',
    //   name: 'home',
    //   component: HomeView
    // },
    {
      path: '/about',
      name: 'about',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/AboutView.vue')
    },
   
    {
      path: '/Department',
      name: 'Department',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/employee.vue')
    },
    {
      path: '/Edit/:id',
      name: 'Edit',
      component: () => import('../views/HomeView.vue')
    },  
     {
      path: '/Frontend',
      name: 'Frontend',
      component: () => import('../views/HomeView.vue')
    },
    {
      path: '/Backend',
      name: 'Backend',
      component: () => import('../views/HomeView.vue')
    },
    {
      path: '/Tester',
      name: 'Tester',
      component: () => import('../views/HomeView.vue')
    }, {
      path: '/abc',
      name: 'abc',
      component: () => import('../views/abc.vue')
    },
    // {
    //   path: '/Department/Employee',
    //   name: 'Department/Employee',
    //   // route level code-splitting
    //   // this generates a separate chunk (About.[hash].js) for this route
    //   // which is lazy-loaded when the route is visited.
    //   component: () => import('../views/employee.vue')
    // }
  ]
  
})

export default router
