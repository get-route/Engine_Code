<template>
<div>DFD</div>
</template>

<script>
    export default {
        name:'admins',
        data(){
          return{
              engines_data:null
          }
        },

        mounted() {
           this.Engine()
        },
        methods:{
            Engine(){
                axios.get('/api/boss_panel').then(res=>{
                   this.engines_data =  res.data
                })
            }
        }


    }
</script>

<style scoped>

</style>
