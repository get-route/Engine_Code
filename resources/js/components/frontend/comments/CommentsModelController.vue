<template>
    <div class="col-lg-12" id="form" >
        <form action="/">
            <div class="form-group">
                <label for="exampleFormControlInput2">Имя </label>
                <input  type="text" class="form-control" id="exampleFormControlInput2"
                       placeholder="Ваше имя или логин">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1"
                       placeholder="пример - name@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Ваш комментарий</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <input type="submit" value="Отправить на модерацию" class="btn btn-dark mt-4">
        </form>
    </div>
</template>

<script>

    export default {
        name: "comments-model",


        data(){

        },
        mounted() {

        },
        methods:{

        }
    }
</script>

<style scoped>

</style>
