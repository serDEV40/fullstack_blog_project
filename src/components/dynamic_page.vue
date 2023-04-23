<template>
    <div class="container">
        <div class="row col-12 col-md-12">
            <div class="card px-0 bg-dark text-light border-0 outline-none">
                <img  :src="obj.img_link" class="card-img-top">
                <div class="card-header">
                    <h3 class="h3 card-title">
                        {{ obj.title }}
                    </h3>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        {{ obj.text }}
                    </p>
                    <p class="card-text text-small">
                        {{ obj.save_time }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>

<script>
    export default{
        data(){
            return{
                obj : {}
            }
        },

        created(){
            this.obj = this.$route.params;
            console.log(this.obj);
        }
    }
</script>