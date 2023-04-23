<template>
    <div class="row m-auto">
        <div class="col-12">
            <div class="title-bordered row mb-5 d-flex align-items-center bg-dark" style="border-radius:24px;outline:solid 1px gray">
                <h1 class="h6 text-white col-9 col-md-9 title-background bg-dark" style="border-radius:24px 0px 0px 24px;">
                    Talk To Me Anytime
                </h1>
                <about_list />
            </div>
            <div class="row">
                <div class="col-md-6 text-light" style="text-align: justify;">
                    <h1 class="title h1" style="text-align: start;">
                        Ask Me Anything Or Say To Hello
                    </h1>    
                    <p class="text">
                        Rather than just filling out a form, Sleeknote also offers help to the user with links directing them to find additional information or take popular actions.
                    </p>
                    <span class="text">
                        <h4 class="h4">
                            Hate Forms? Write Us Email
                        </h4>
                        <p class="text">
                            <font-awesome-icon icon="fa-solid fa-envelope" /> serhatmete400@gmail.com
                        </p>
                    </span>
                </div>
                
                <div class="col-md-6 text-light">
                    <form method="POST" @submit.prevent.native="submitForm">
                        <div class="form-group mb-3">
                            <label for="name" class="mb-1">Your Name (Required)</label>
                            <input type="text" name="contact_name" id="name" class="form-control" v-model="form.name" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="mb-1">Your Email Address (Required)</label>
                            <input type="email" name="contact_mail" id="email" class="form-control" v-model="form.mail" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="message" class="mb-1">Your Message Here</label>
                            <textarea name="contact_request" id="message" class="form-control" v-model="form.request"></textarea>
                        </div>
                        <button class="btn btn-primary" name="submit">
                            Send Now
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import About_list from './child_components/about_list.vue';
    import { library } from '@fortawesome/fontawesome-svg-core';
    import about_list from './child_components/about_list.vue';
    import { faEnvelope } from '@fortawesome/free-solid-svg-icons';
    import { faLinkedin, faGithub, faInstagram, faYoutube } from '@fortawesome/free-brands-svg-icons';
    import axios from 'axios'
    
    library.add(faLinkedin,faGithub, faInstagram, faYoutube, faEnvelope);

    export default{
        data(){
            return{
                form : {
                    'name' : null,
                    'mail' : null,
                    'request' : null
                }
            }
        },

        methods : {
            submitForm : async function(){
                let fd = new FormData();
                fd.append('contact_name' , this.form.name);
                fd.append('contact_mail' , this.form.mail);
                fd.append('contact_request' , this.form.request); 

                await fetch('http://localhost/all_projects/blog/backend/items.php',{
                    'method' : 'Post',
                    'body' : fd,
                });

                this.form.name = null, 
                this.form.mail = null, 
                this.form.request = null;
            }
        },

        components : {
            About_list
        }
    }
</script>

<style scoped>
    .title-background{
        padding: 10px 25px;
        margin-bottom: 0;
        border-radius: inherit;
        display: inline-block;
    }
</style>