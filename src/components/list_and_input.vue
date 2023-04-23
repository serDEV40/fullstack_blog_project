<template>
    <div class="col-12 col-lg-12 card mb-4 bg-dark">
        <h5 class="title text-light card-header card-title">
            Search
        </h5>
        <form action="" class="card-body">
            <input type="text" class="form-control text-light bg-black" @keyup="searchFunct">
            <ul class="list-group bg-light list-group-flush" v-if="searchText != ''"
                style="position:absolute;width:100%;margin:0px -1rem;z-index:1;">
                <li class="list-group-item bg-dark text-light" v-for="item of items" v-if="searchBool">
                    <RouterLink :to="{
                        'name' : 'Read It More',
                        'params' : {
                            'id' : item.card_id,
                            'title' : item.card_title,
                            'text' : item.card_text,
                            'img_link' : item.card_imgLink,
                            'save_time' : item.card_saveTime
                            }
                        }" class="card bg-dark text-light text-decoration-none border-1 rounded-0" style="flex-direction: column;">                        
                        <img :src="item.card_imgLink" title="cod-mw" class="img-fluid col-12 col-md-12">
                        <div class="card-body p-0 col-md-12 col-12">
                            <div class="card-header p-1">
                                <span class="card-title">
                                    {{ item.card_title }}
                                </span>
                            </div>
                        </div>
                    </RouterLink>
                </li>
            </ul>
        </form>
    </div>
    <div class="col-12 col-lg-12 card text-dark bg-dark">
        <h5 class="title text-light card-header card-title">
            Categories
        </h5>
        <ul class="list-unstyled list-group list-group-flush p-0 card-body">
            <li class="list-group-item bg-dark text-light">
                <span class="text">Lorem, ipsum.</span>
            </li>
            <li class="list-group-item bg-dark text-light">
                <span class="text">Lorem, ipsum.</span>
            </li>
            <li class="list-group-item bg-dark text-light">
                <span class="text">Lorem, ipsum.</span>
            </li>
            <li class="list-group-item bg-dark text-light">
                <span class="text">Lorem, ipsum.</span>
            </li>
            <li class="list-group-item bg-dark text-light">
                <span class="text">Lorem, ipsum.</span>
            </li>
        </ul>
    </div>
    <div class="col-lg-12 card text-dark bg-dark mt-4">
        <h5 class="title text-light card-header card-title">Last Posted</h5>
        <ul class="list-unstyled list-group list-group-flush p-0 card-body">
            <li class="list-group-item bg-dark text-light" v-for="item of items">
                <RouterLink :to="{
                    'name' : 'Read It More',
                    'params' : {
                        'id' : item.card_id,
                        'title' : item.card_title,
                        'text' : item.card_text,
                        'img_link' : item.card_imgLink,
                        'save_time' : item.card_saveTime
                    }
                }" class="card bg-dark text-light text-decoration-none border-1 rounded-0" style="flex-direction: column;">
                    <img :src="item.card_imgLink" title="cod-mw" class="img-fluid col-12 col-md-12">
                    <div class="card-body p-0 col-md-12 col-12">
                        <div class="card-header p-1">
                            <span class="card-title">
                                {{ item.card_title }}
                            </span>
                            <p class="card-text" style="text-transform: lowercase;font-size: 0.75rem;">
                                {{ item.card_saveTime }}
                            </p>
                        </div>
                    </div>
                </RouterLink>
            </li>
        </ul>
    </div>
</template>

<script>
    import axios from 'axios';
    import { RouterLink } from 'vue-router';

    export default{
        data(){
            return{
                items : [],
                'searchText' : '',
                'searchBool' : false
            }
        },

        mounted : async function(){
            let datas = await axios.get("http://localhost/all_projects/blog/backend/items.php")
            .then((response)=>{return response.data}).then((data)=>{return data});
            this.items = [...datas];
        },

        methods : {
            searchFunct : function(event){
                this.searchText = event.target.value;

                this.items.forEach((item)=>{
                    if(item.card_title.toLowerCase().includes(this.searchText.toLowerCase())){
                        this.searchBool = !this.searchBool;
                    }else{
                        this.searchBool = !this.searchBool;
                    }
                    return(this.searchBool);
                });
            }
        }
    }
 
</script>