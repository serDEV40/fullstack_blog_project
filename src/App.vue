<script setup>
    import { defineComponent } from 'vue';
    import Container from './components/container.vue';
    import Footer from './components/footer.vue';
    import navbar from './components/navbar.vue';

    defineComponent(navbar,Container,Footer);
</script>

<template>
    <navbar></navbar>
    <Container></Container>
    <Footer></Footer>
</template>