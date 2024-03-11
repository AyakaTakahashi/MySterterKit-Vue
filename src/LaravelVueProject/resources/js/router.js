import * as vueRouter from "vue-router";
import DashboardComponent from "./components/Dashboard.vue"
import TodoListComponent from "./components/todo/TodoList.vue"
import TodoDetailComponent from "./components/todo/TodoDetail.vue"
import TodoAddComponent from "./components/todo/TodoAdd.vue"
import TodoEditComponent from "./components/todo/TodoEdit.vue"
import CustomerListComponent from "./components/customer/CustomerList.vue"
import CustomerDetailComponent from "./components/customer/CustomerDetail.vue"
import CustomerAddComponent from "./components/customer/CustomerAdd.vue"
import CustomerEditComponent from "./components/customer/CustomerEdit.vue"
import MenuListComponent from "./components/menu/MenuList.vue"
import MenuAddComponent from "./components/menu/MenuAdd.vue"
import MenuDetailComponent from "./components/menu/MenuDetail.vue"

const routes = [
    { 
        path: '/', 
        name: 'dashboard', 
        component: DashboardComponent
    },
    { 
        path: '/todos', 
        name: 'todo.list', 
        component: TodoListComponent,
    },
    { 
        path: '/todos/:todoId', 
        name: 'todo.detail', 
        component: TodoDetailComponent,
        props: true,
    },
    { 
        path: '/todos/add', 
        name: 'todo.add', 
        component: TodoAddComponent,
    },
    { 
        path: '/todos/:todoId/edit', 
        name: 'todo.edit', 
        component: TodoEditComponent,
        props: true,
    },
    { 
        path: '/customers', 
        name: 'customer.list', 
        component: CustomerListComponent,
    },
    { 
        path: '/customers/:customerId', 
        name: 'customer.detail', 
        component: CustomerDetailComponent,
        props: true,
    },
    { 
        path: '/customers/add', 
        name: 'customer.add', 
        component: CustomerAddComponent,
    },
    { 
        path: '/customers/:customerId/edit', 
        name: 'customer.edit', 
        component: CustomerEditComponent,
        props: true,
    },
    { 
        path: '/menu', 
        name: 'menu.list', 
        component: MenuListComponent,
    },
    { 
        path: '/menu/add', 
        name: 'menu.add', 
        component: MenuAddComponent,
    },
    { 
        path: '/menu/:menuId', 
        name: 'menu.detail', 
        component: MenuDetailComponent,
        props: true,
    },
    // { 
    //     path: '/menu/:menuId/edit', 
    //     name: 'menu.edit', 
    //     component: MenuEditComponent,
    //     props: true,
    // },
];

const router = vueRouter.createRouter({
  history: vueRouter.createWebHistory(),
  routes,
});

export default router;