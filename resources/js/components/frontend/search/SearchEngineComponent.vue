<template>
    <div class="row mt-5">
        <div class=" text-center col-lg-9  col-md-9">

            <input type="text" v-model="search_two" @keyup.enter="RequestSearch" class="form-control-lg w-100">
            <label>Укажите запрос и нажмите кнопку Найти или Enter</label>
            <p class="fs-2">{{search_two}}</p>
        </div>
        <div class="col-lg-3 col-md-3">
            <button class="btn-lg btn-dark" @click="ClickSearch">Найти</button>
        </div>

        <div class="scroll mt-4 mb-4">
            <div class="list-group" v-for="(search_name,search_url) in result">
                <a :href="'/'+search_url" class="list-group-item list-group-item-action " target="_blank">{{search_name}}</a>
            </div>
        </div>


    </div>

</template>

<script>
    export default {
        name: "search-engine",
        data(){
            return{
                search_two: ' ',
                request:null,
                result:null,

            }
        },
        methods: {
            RequestSearch: function () {
                axios.post('/public/api/engine/'+this.search_two, {'request_search':this.search_two}).then(res=>{
                    this.result = res.data
                })
            },
            ClickSearch:function () {
                this.RequestSearch()
            }

        },


    }
</script>

<style scoped>
.scroll{
    height:150px!important; /* высота нашего блока */
    overflow-y: scroll; /* прокрутка по вертикали */
}
</style>
