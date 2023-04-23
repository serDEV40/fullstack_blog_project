<template>
    <div class="row">
        <div class="col-lg-8 mb-5 mb-lg-0">
            <carousel></carousel>
        </div>
        <div class="col-lg-4 mb-5 mb-lg-">
            <List_and_input></List_and_input>
        </div>
    </div>    
</template>

<script setup>
    import { defineComponent } from 'vue';
    import carousel from './carousel.vue';
    import List_and_input from './list_and_input.vue';
    
    defineComponent(carousel, List_and_input);
</script>