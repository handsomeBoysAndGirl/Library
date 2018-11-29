import Vue from 'vue'
import Router from 'vue-router'
import Login from '@/components/login'
import Main from '@/components/main'
import Aside from '@/components/aside'
import Findpwd from '@/components/findpwd'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'login',
      component: Login
    },
    {
      path: '/main',
      name: 'main',
      component: Main
    },
    {
      path: '/aside',
      name: 'aside',
      component: Aside
    },
    {
      path: '/findpwd',
      name: 'findpwd',
      component: Findpwd
    }
  ]
})
