import Vue from 'vue';
import Router from 'vue-router';

Vue.use(Router);

import Societe from '../pages/Societe.vue'
import Agriculture from '../pages/agriculture.vue';
import Etude from '../pages/etude.vue';
import Industrie from '../pages/industrie.vue';
import dashVille from '../pages/dashville.vue';
import dashVille from '../pages/dashprojet.vue';
import dashVille from '../pages/register.vue';
import dashVille from '../pages/connexion.vue';




const routes = [
    { path: '/', name: 'Societe', component: Societe},
    { path: '/Agriculture', name: 'Agriculture',component: Agriculture},
    { path: '/Etude', name: 'Etude', component: Etude},
    { path: '/Industrie', name: 'Industrie', component: Industrie},
    {path: '/Ville',  name: 'dashville', component: dashville},
    {path: '/projet',  name: 'dashprojet', component: dashprojet},
    {path: '/register',  name: 'register', component: register},
    {path: '/connexion',  name: 'connexion', component: connexion},

];

const router = new Router({
    routes: routes
})

export default router;