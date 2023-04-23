<template>
    <div class="row m-auto">
        <div class="col-12">
            <div class="title-bordered row mb-5 d-flex align-items-center bg-dark"  style="border-radius: 24px;outline: solid 1px gray;">
                <h1 class="h6 text-white col-9 col-md-9 title-background bg-dark" style="border-radius: 24px 0px 0px 24px;">Hi, My Name Is Serhat Mete CETIN</h1>
                <about_list />
            </div>
        </div>
        <img src="https://images.wallpaperscraft.com/image/single/astronaut_ring_neon_156673_1920x1080.jpg" class="px-0 rounded-3 img-fluid w-100 mb-4 rounded-lg">
        <div class="content px-0">
            <p class="text-light" style="text-align: justify;">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, natus velit nemo assumenda adipisci odit ex voluptatem iusto. At culpa maiores odio harum esse neque pariatur est. Nulla tempora quibusdam ratione fugiat distinctio nam, dolor quam ut earum nostrum accusamus, repellendus officiis commodi perferendis quae! Nobis voluptates obcaecati libero ducimus eaque praesentium modi error sit, assumenda temporibus dolores velit harum quaerat neque impedit soluta nihil officiis ullam commodi animi a tenetur. Ipsa culpa iusto, non asperiores explicabo dolores beatae natus sapiente placeat libero pariatur aliquid fugiat unde dolor, neque suscipit quo ipsum voluptatem doloremque! Modi in, quibusdam, deserunt eligendi ab quae eveniet tempora totam animi a voluptatem mollitia temporibus impedit dolor velit dolorem dolores numquam et nesciunt voluptatibus, sunt provident asperiores id pariatur? Distinctio, officia.
            </p>
        </div>
    </div>
</template>

<script setup>
    import { library } from '@fortawesome/fontawesome-svg-core';
    import about_list from './child_components/about_list.vue';
    import { faLinkedin, faGithub, faInstagram, faYoutube } from '@fortawesome/free-brands-svg-icons';
    
    library.add(faLinkedin,faGithub, faInstagram, faYoutube);
</script>

<style scoped>
    .title-background{
        padding: 10px 25px;
        margin-bottom: 0;
        border-radius: inherit;
        display: inline-block;
    }
</style>