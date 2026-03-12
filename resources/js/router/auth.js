import Home from '@/pages/Index.vue';
import Config from '@/pages/Config.vue';
import Users from '@/pages/Employees/Users.vue';
import FormEdit from '@/pages/Employees/Edit.vue';
import User from '@/pages/Patients/User.vue';
import Person from '@/pages/Patients/Person.vue';

export default [
    { path: '/home', name: 'home', component: Home },
    { path: '/users', name: 'users', component: Users },
    { path: '/config', name: 'config', component: Config },
    { path: '/edit/:isEmployee/:userId', name: 'form-user', component: FormEdit },
    { path: '/user', name: 'user', component: User },
    { path: '/form-person/:userId', name: 'form-person', component: Person}
]
