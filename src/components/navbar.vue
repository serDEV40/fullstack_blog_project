<template>
    <!-- navigation -->
    <header class="sticky-top bg-black border-bottom border-default">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-white nbar">
                <RouterLink to="/" class="navbar-brand align-items-center d-flex" href="#">
                    <font-awesome-icon icon="fa-solid fa-cube" class="text-light" size="2x" />
                    <span class="navbar-text text-light ms-3">serDEV40</span>
                </RouterLink>
                <ul class="navbar-nav ml-auto collapse navbar-collapse text-center justify-content-end collapse navbarSupportedContent">
                    <li class="nav-item mx-3" v-for="route of route_names">
                        <RouterLink :to="route.path" class="nav-link text-light">
                            {{ route.name }}
                        </RouterLink>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- /navigation -->
</template>

<script setup>
    import { RouterLink } from 'vue-router';
    import { route_names } from '../routers.js';
    import { library } from '@fortawesome/fontawesome-svg-core';
    import { faCube } from '@fortawesome/free-solid-svg-icons';

    library.add(faCube);

    for(let index = 0; index <= route_names.length - 1; index++){
        let name = route_names[index].name;

        if(name == "Read It More"){
            let indexOf = route_names.indexOf(route_names[index]);
            
            if(indexOf > -1){
                route_names.splice(indexOf,1);
            }
        }
    }
</script>

<style scoped>
    input[type=text]{
        margin: 0.5rem 0rem  0.25rem 0rem;
        width: 100%;
        height: 100%;
    }

    ::placeholder{
        color: #fff;
    }

    .nbar{
        justify-content: space-between;
    }

    @media screen and (max-width:360px) {
        .nbar{
            flex-direction: column;
        }

        .navbarSupportedContent{
            display: flex;
            flex-direction: unset;
        }
    }

    @media screen and (max-width:480px){
        .nbar{
            flex-direction: column;
        }

        .navbarSupportedContent{
            display: flex;
            flex-direction: unset;
        }

        input[type=text]{
            height: unset;
        }
    }
</style>