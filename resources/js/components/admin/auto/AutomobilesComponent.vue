<template>
    <!-- /.card-header -->
    <div class="col-lg-12 text-center text-success h2">
        {{this.message}}
    </div>
    <table class="table">

        <thead>

        <tr>
            <th scope="col">#id</th>
            <th scope="col">Название</th>
            <th scope="col">Url</th>
        </tr>
        </thead>
        <tbody>
        <template v-for="auto_data in autoin.data">
            <tr>
                <td>{{auto_data.id}}</td>
                <td>{{auto_data.name}}</td>
                <td>{{auto_data.url}}</td>
                <td><button @click="isEdit(auto_data.id,auto_data.id, auto_data.name, auto_data.url, auto_data.models_id)" class="btn-primary">Редактировать</button></td>
            </tr>
            <tr :class="displayOn(auto_data.id) ? '' : 'd-none'">
                <td><input type="text" v-model="id" class="form-control"></td>
                <td><input type="text" v-model="name" class="form-control"></td>
                <td><textarea type="text" v-model="url" class="form-control w-100" >{{auto_data.url}}</textarea></td>
                <td><button class="btn-primary" @click="updateEngine(auto_data.id)">Обновить</button></td>
            </tr>
        </template>
        </tbody>
        <tfoot>
        <tr>
            <th>#id</th>
            <th>Название</th>
            <th>URL</th>
        </tr>
        </tfoot>
    </table>
    <div class="col-lg-8 text-center">

        <pagination :data="autoin" :limit="5" @pagination-change-page="AllAuto">
            <template #prev-nav>
                <span>&lt; Назад</span>
            </template>
            <template #next-nav>
                <span>Вперед &gt;</span>
            </template>
        </pagination>
    </div>

    <!-- /.card-body -->
</template>
<script>
    export default {

        name: "auto-component"
        ,
        data(){
            return{
                autoin: {},
                edit: null,
                id: null,
                name : null,
                url: null,
                models_id:null,
                message: null
            }
        }
        ,
        mounted() {
            this.AllAuto()
        },
        methods: {
            AllAuto(page = 1) {
                axios.get('/api/boss_panel/auto?page=' + page).then(res => {
                    this.autoin = res.data;
                })

            },
            updateEngine(id){
                 this.edit = null
                 axios.patch('/api/boss_panel/auto/' + id,{name: this.name, url: this.url, models_id:this.models_id}).then(res => {
                    console.log(res)
                    this.AllAuto()
                     this.message ='Запись ("'+this.name+'")успешно обновлена'
                 })
            },
            isEdit(id, ident,name, url,models_id){
                this.edit = id
                this.id = ident
                this.name = name
                this.url = url
                this.models_id = models_id

            },
            displayOn(id){
                return this.edit === id
            },

        },
    }
</script>

<style scoped>

</style>

