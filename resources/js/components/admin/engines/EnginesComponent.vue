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
                <th scope="col">Характеристики</th>
            </tr>
            </thead>
            <tbody>
            <template v-for="auto_data in autoin.data">
            <tr>
                <td>{{auto_data.id}}</td>
                <td>{{auto_data.name}}</td>
                <td>{{auto_data.specs}}</td>
                <td><button @click="isEdit(auto_data.id,auto_data.id, auto_data.name, auto_data.specs, auto_data.automobile_id)" class="btn-primary">Редактировать</button></td>
            </tr>
              <tr :class="displayOn(auto_data.id) ? '' : 'd-none'">
                <td><input type="text" v-model="id" class="form-control"></td>
                <td><input type="text" v-model="name" class="form-control"></td>
                  <td><textarea type="text"  v-model="specs" class="form-control w-100" >{{"auto_data.specs"}}</textarea></td>
                <td><button class="btn-primary" @click="updateEngine(auto_data.id)">Обновить</button></td>
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
               automobile_id:null,
               message: null
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
           updateEngine(id){
               this.edit = null
               axios.patch('/api/boss_panel/engines/' + id,{name: this.name, specs: this.specs, automobile_id:this.automobile_id}).then(res => {
                  console.log(res)
                   this.AllAuto()
                   this.message ='Запись ("'+this.name+'")успешно обновлена'
               })
           },
           isEdit(id, ident,name, specs,automobile_id){
               this.edit = id
               this.id = id
               this.name = name
               this.specs =JSON.stringify(specs)
               this.automobile_id = automobile_id

           },
           displayOn(id){
             return this.edit === id
           },

       },
    }
</script>

<style scoped>

</style>
