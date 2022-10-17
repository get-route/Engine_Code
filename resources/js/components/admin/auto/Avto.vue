<template>
    <div>df


    </div>
</template>

<script>
    export default {
        name: "Avto",
        mounted() {
           this.AllAuto()
        },

        methods:{
            async AllAuto(){
                axios.get('/api/boss_panel/auto').then (res=>{
                    console.log(res)
                })
            }
        }
    }
</script>

<style scoped>

</style>
