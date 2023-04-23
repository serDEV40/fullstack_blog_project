import { createRouter, createWebHistory } from "vue-router";
import main_container from './components/main_container.vue';
import about from './components/about.vue';
import contact from './components/contact.vue';
import dynamic_page from './components/dynamic_page.vue';


export const routers = createRouter({
    routes : [{
        'path' : '/',
        'component' : main_container,
        'name' : 'Home',
        'props' : true
    },{
        'path' : '/about',
        'component' : about,
        'name' : 'About'
    },{
        'path' : '/contact',
        'component' : contact,
        'name' : 'Contact'
    },{
        'path' : '/item=:id/title=:title/text=:text/img_link=:img_link/save_time=:save_time',
        'component' : dynamic_page,
        'name' : 'Read It More',
        'props' : true
    }],
    history : createWebHistory()
});

export let route_names = [...routers.options.routes];