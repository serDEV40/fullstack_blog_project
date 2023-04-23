<template>
    <div class="card bg-dark mb-4" v-for="item, index of data">
        <img :src="item.card_imgLink" class="card-img-top">
        <div class="card-header">
            <span class="card-title" style="text-align: justify;">
                <h4 class="title text-light">
                    {{ item.card_title }}
                </h4>
            </span>
        </div>
        <div class="card-body">
            <p class="card-text text-light" style="font-size: 0.75rem;">
                {{ item.card_saveTime }}
            </p>
            <span class="card-text text-light">
                {{ item.card_text }}
            </span>
        </div>
        <div class="card-footer">
            <button @click.native="sendData(item)" class="card-button btn btn-success">
                İnceleme Sayfasına Git
            </button>
        </div>
    </div>
</template>

<script>
    import { RouterLink } from 'vue-router';

    export default{
        data(){
            return{
                data : []
            } 
        },

        methods: {
            sendData : function(item){
                this.$router.push({
                    'name' : 'Read It More',
                    'params' : {
                        'id' : item.card_id,
                        'title' : item.card_title,
                        'text' : item.card_text,
                        'img_link' : item.card_imgLink,
                        'save_time' : item.card_saveTime
                    }
                });
            }
        },
        
        created(){
            setTimeout(async ()=>{
                let fetchData = await fetch("http://localhost/all_projects/blog/backend/items.php")
                .then(res=>{return res.json()})
                .then(data=>{return data});

                this.data = fetchData;
            },250);
        }
    } 
</script>