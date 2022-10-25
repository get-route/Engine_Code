<template>
    <div class="d-flex justify-content-between align-items-center">
        <p class="small mb-0" style="color: #aaa;">
            <a  href="#form" @click="Names()"   class="link-grey">Ответить</a>
        </p>
    </div>

</template>

<script>
    export default {
        name: "reply-button",
        props: [
            'url_model', 'parent_id'
        ],
        mounted() {

        },
        methods:{
            Names:function () {
                console.log(this.url_model)
                console.log(this.parent_id)
            }
        }

    }
</script>

<style scoped>

</style>
