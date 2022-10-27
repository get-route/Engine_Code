<template>
    <table class="table">

        <thead>

        <tr>
            <th>#id</th>
            <th>Имя</th>
            <th>Email</th>
            <th>Комментарий</th>
        </tr>
        </thead>
        <tbody>
        <template v-for="auto_data in autoin.data">
            <tr>
                <td>{{auto_data.id}}</td>
                <td>{{auto_data.name}}</td>
                <td>{{auto_data.email}}</td>
                <td>{{auto_data.comment}}</td>
                <td v-if="auto_data.public === 'yes'"><button @click="PublicComment(auto_data.id,'no')" class="btn-dark">Запретить</button></td>
                <td v-else ><button @click="PublicComment(auto_data.id,'yes')" class="btn-success">Одобрить</button></td>
                <td><button @click="DeleteComment(auto_data.id)" class="btn-danger">X</button></td>
            </tr>
        </template>
        </tbody>
        <tfoot>
        <tr>
            <th>#id</th>
            <th>Имя</th>
            <th>Email</th>
            <th>Комментарий</th>
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

        name: "comments-component"
        ,
        data(){
            return{
                autoin: {},
                id: null,
                public : null,
                notPublic: null,
            }
        }
        ,
        mounted() {
            this.AllAuto()
        },
        methods: {
            AllAuto(page = 1) {
                axios.get('/api/boss_panel/comment?page=' + page).then(res => {
                    this.autoin = res.data;
                })

            },
            PublicComment(id,publicParams){

                axios.patch('/api/boss_panel/comment/' + id,{public: publicParams}).then(res => {

                    this.AllAuto()
                })
            },
            DeleteComment(id){
                axios.delete('/api/boss_panel/comment/' + id).then(res=>{
                    this.AllAuto()
                })
            }
        },
    }
</script>

<style scoped>

</style>

