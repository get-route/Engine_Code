<template>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#id</th>
                <th>Название</th>
                <th>Характеристики</th>
                <th>Публикация</th>
            </tr>
            </thead>
            <tbody>
            <template v-for="auto_data in autoin.data">
            <tr>
                <td>{{auto_data.id}}</td>
                <td>{{auto_data.name}}</td>
                <td>{{auto_data.specs}}</td>
                <td>{{auto_data.updated_at}}</td>
                <td><button @click="isEdit(auto_data.id,auto_data.id, auto_data.name, auto_data.specs, auto_data.updated_at)" class="btn-primary">Редактировать</button></td>
            </tr>
              <tr :class="displayOn(auto_data.id) ? '' : 'd-none'">
                <td><input type="text" v-model="id" class="form-control"></td>
                <td><input type="text" v-model="name" class="form-control"></td>
                  <td><textarea type="text"  v-model="specs" class="form-control w-100" >{{auto_data.specs}}</textarea></td>
                <td><input type="text" v-model="updated_at" class="form-control"></td>
                <td><button class="btn-primary">Обновить</button></td>
            </tr>
            </template>
            </tbody>
            <tfoot>
            <tr>
                <th>#id</th>
                <th>Название</th>
                <th>Характеристики</th>
                <th>Публикация</th>
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
    </div>
    <!-- /.card-body -->
</template>

<script>
    export default {

        name: "eng-component"
        ,
       data(){
           return{
               autoin: {},
               edit: null,
               id: null,
               name : null,
               specs: null,
               updated_at: null
               }
           }
       ,
        mounted() {
        this.AllAuto()
            },
       methods: {
           AllAuto(page = 1) {
               axios.get('/api/boss_panel/engines?page=' + page).then(res => {
                   this.autoin = res.data;
               })

           },
           updateEngine(){
               axios.get('/api/boss_panel/engines?page=' + page).then(res => {
                   this.autoin = res.data;
               })
           },
           isEdit(id, ident,name, specs, updated_at){
               this.edit = id
               this.id = id
               this.name = name
               this.specs = specs
               this.updated_at = updated_at

           },
           displayOn(id){
             return this.edit === id
           },

       },
    }
</script>

<style scoped>

</style>
