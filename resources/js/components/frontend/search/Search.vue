<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading ">
                    <h1>Найти где номер <em>двигателя</em> онлайн</h1>
                    <p>Выберите критерии поиска по по которых хотели бы узнать расположение идентификационных данных</p>
                    <div class="line-dec"></div>
                </div>
            </div>
            <div class="col-lg-12">

                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="container">

                        <div class="row service-menu text-center">
                            <div class="col-lg-6 service-menu-item" id="flush-headingOne">
                                <button type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne" >
                                    <a href="#auto"> <img src="/public/frontend/img/service-icon-03.png" alt="номер двигателя по автомобилю">
                                        <h2>По автомобилю</h2></a>
                                </button>
                            </div>
                            <div class="col-lg-6 service-menu-item" id="flush-headingTwo">
                                <button class="collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                    <a href="#model-engine">
                                        <img src="/public/frontend/img/service-icon-04.png" alt="номер двигателя по модели силового агрегата">
                                        <h2>По двигателю</h2>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">

                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                             aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">

                                <div class="row">
                                    <div class="col-lg-6 align-self-center">
                                        <h3>Выберите модель своего авто</h3>
                                        <p>Выберите необходимую модель своего автомобиля и получите данные расположения номера двигателя. В описании к автомобилю можно будет увидеть дополнительную информацию.</p>
                                        <div class="ticks-list"><span><i class="fa fa-check"></i> Характеристики авто</span>
                                            <span><i class="fa fa-check"></i> Мощность и модель двигателя</span> <span><i
                                                class="fa fa-check"></i> Расположение номера</span>
                                            <span id="auto"><i class="fa fa-check"></i> Подробную характеристику автомобиля</span> </div>
                                        <search-model></search-model>

                                    </div>
                                    <div class="col-lg-6 align-self-center">
                                        <div class="right-image">
                                            <img src="/public/frontend/img/services-image.jpg" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                             aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="accordion-body">

                                    <div class="row">
                                        <div class="col-lg-6 align-self-center" >

                                            <h3>Задайте модель своего двигателя</h3>
                                            <p>Вы можете просто выбрать нужную модель Вашего двигателя и просмотреть интересующую информацию касательно характеристики и расположений необходимых идентификационных данных</p>
                                            <div class="ticks-list"><span><i class="fa fa-check"></i> Мощности силового агрегата</span>
                                                <span><i class="fa fa-check"></i> Допустимой нагрузки</span> <span><i
                                                    class="fa fa-check"></i> Параметров диагностики</span>
                                                <span id="model-engine"><i class="fa fa-check"></i> Отзывов автовладельцев</span> </div>


                                                <search-engine></search-engine>

                                        </div>
                                        <div class="col-lg-6 align-self-center">
                                            <div class="right-image">
                                                <img src="/public/frontend/img/services-image-02.jpg" alt="">
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
</template>


<style scoped>

</style>

