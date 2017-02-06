<template>
    <div class="container col-lg-6" style='width:100%'>
        <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">Корзина заказа</div>
                    <div class="panel-body">
                         <div class="row">
                            <div class='col-lg-6'>
                            <my-input placeholder='Название коммерческого предложения' v-model='name'  ></my-input>
                            <my-input placeholder='Компания' v-model='company'></my-input>
                            </div>
                             <div class='col-lg-6'>
                             <span>{{ name }}</span>
                             </div>
                         </div>
                    </div>
                </div>
        </div>
    </div>
</template>