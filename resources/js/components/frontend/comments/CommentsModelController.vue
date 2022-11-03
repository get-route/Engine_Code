<template>
    <div class="row d-flex justify-content-center" >
        <div class="col-lg-12 text-center">
            <div class="section-heading">
                <h4  id="comments">Отзывы владельцев {{this.models}}<em></em></h4>
            </div>
        </div>
        <div v-for="comment in comments" class="col-md-12 col-lg-10 col-xl-8 " >
            <div class="card mb-3 col-lg-12" >
                <div class="card-body">
                    <div class="col-lg-12 text-center">
                        <img class="img_char " src="/frontend/img/comments.png"/>
                    </div>
                    <div class="d-flex flex-start">
                        <div class="w-100">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="text-primary fw-bold mb-0">
                                   {{comment.name}}
                                    <span class="text-dark ms-2">{{comment.comment}}</span>
                                </h5>
                                <p class="mb-0">{{DataFormat(comment.updated_at)}}</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="small mb-0" style="color: #aaa;">
                                    <a href="#form" @click="ReplyData(comment.url_model,comment.url_engine,comment.id)" class="link-grey">Ответить</a> •
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div v-for="parentComment in comparent" class=" mb-3 col-lg-8 col-sm-8 col-8"  >
                <template v-if="parentComment.parent_id === comment.id">
                <div class="card card-body " >
                    <div class="col-lg-12 text-center">
                        <img class="img_char " src="/frontend/img/comments.png"/>
                    </div>
                    <div class="d-flex flex-start">
                        <div class="w-100">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="text-primary fw-bold mb-0">
                                    {{parentComment.name}}
                                    <span class="text-dark ms-2">{{parentComment.comment}}</span>
                                </h5>
                                <p class="mb-0">{{DataFormat(parentComment.updated_at)}}</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="small mb-0" style="color: #aaa;">
                                    <a  href="#form" @click="ReplyData(parentComment.url_model,parentComment.url_engine,comment.id)" class="link-grey">Ответить</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                </template>
            </div>
        </div>

        <div class="col-lg-12" id="form" >
                <div class="form-group">
                    <label for="exampleFormControlInput2">Имя </label>
                    <input v-model="name"  type="text" class="form-control" id="exampleFormControlInput2"
                            placeholder="Ваше имя или логин">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input v-model="email" type="email" class="form-control" id="exampleFormControlInput1"
                           placeholder="пример - name@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Ваш комментарий</label>
                    <textarea v-model="commentsText" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <input type="submit" @click="AddComment(this.idmodel)" value="Отправить на модерацию" class="btn btn-dark mt-4">
        </div>
    </div>

</template>

<script>
    import moment from 'moment'
    export default {
        name: "comments-model",
        data(){
            return{
                urlModels:null,
                urlEngines:null,
                parentsID:null,
                name:null,
                email:null,
                commentsText:null,
                modelUrl:null
            }

        },
        components:moment,
        props:['models','comments','comparent','url','idmodel'],
        mounted() {

        },
        methods:{
            DataFormat:function (dataNew) {
                return moment(dataNew).format('L')
            },
            ReplyData: function (urlModel,urlEngine,parentId) {
                this.urlModels = urlModel
                this.urlEngines = urlEngine
                this.parentsID = parentId
            },
            AddComment:function (idmodel) {
                axios.post('../../api/car/'+ this.url,{name:this.name, email:this.email, comment:this.commentsText, parent_id:this.parentsID,url_model:idmodel,url_engine:this.urlEngines}).then(
                    res=>{
                        alert('Спасибо за комментарий. Он ушел на модерацию. После проверки, мы его добавим...')

                    }
                )
            }
        }
    }
</script>

<style scoped>

</style>
