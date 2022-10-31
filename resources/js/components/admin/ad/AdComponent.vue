<template>
    <div>
        <p></p>
    </div>
    <div class="row text-center" >
        <div class="col-lg-8">
            <div class="form-group">
                <label>Блок 1 (Под первым заголовком в двигателях)</label>
                <textarea v-model="table_block.block1" class="form-control" rows="3"></textarea>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="form-group">
                <label>Блок 2 (Под заголовком параметров двигателя)</label>
                <textarea v-model="table_block.block2" class="form-control" rows="3" ></textarea>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="form-group">
                <label>Блок 3 (Под заголовком популярных авто в двигателях)</label>
                <textarea v-model="table_block.block3" class="form-control" rows="3" ></textarea>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="form-group">
                <label>Блок 4 (Футер блок)</label>
                <textarea v-model="table_block.block4" class="form-control" rows="3" ></textarea>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="form-group">
                <label>Блок 5 (Под заголовком модели авто)</label>
                <textarea v-model="table_block.block5" class="form-control" rows="3" ></textarea>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="form-group">
                <label>Блок 6 (Под заголовк где следует искать номер двиг)</label>
                <textarea v-model="table_block.block6" class="form-control" rows="3" ></textarea>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="form-group">
                <label>Блок 7 (Под заголовком модификации моторов)</label>
                <textarea v-model="table_block.block7" class="form-control" rows="3" ></textarea>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="form-group">
                <label>Блок 8 (Где номер двигателя в моделях авто)</label>
                <textarea v-model="table_block.block8" class="form-control" rows="3" ></textarea>
            </div>
        </div>

        <button @click="UpdateBlock(this.table_block)" type="submit" class="btn-lg btn-success w-50 mb-4 mt-4">Сохранить</button>

    </div>

</template>

<script>
    export default {
        name: "ad-component",
        data(){
            return{
                block1:" ",
                block2:" ",
                block3:" ",
                block4:" ",
                block5:" ",
                block6:" ",
                block7:" ",
                block8:" ",
                table_block: {},
            }
        },
        mounted() {
            this.GetBlock()
        }
        ,
        methods:{
            UpdateBlock:function (table_block) {
                axios.patch('/api/boss_panel/add',{'block1':table_block.block1,'block2':table_block.block2,'block3':table_block.block3,'block4':table_block.block4,'block5':table_block.block5,'block6':table_block.block6,'block7':table_block.block7,'block8':table_block.block8,}).then(res=>{

                })
                alert('Рекламные блоки обновлены успешно')
                return this.GetBlock()
            },
            GetBlock:function () {
                axios.get('/api/boss_panel/add').then(res=>{
                    this.table_block =res.data[0].block

                })
            }
        }
    }
</script>

<style scoped>

</style>
