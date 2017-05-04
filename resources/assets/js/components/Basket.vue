<template>
    <div class="container" >
        <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">Корзина заказа</div>
                    <div class="panel-body">
                         <div class="row">
                            <div class='col-lg-6'>
                                <my-input placeholder='Название коммерческого предложения' v-model='name'  ></my-input>
                                <div class='row'>Срок поставки: <input type='text' v-model='weeks' size=3 /><input type='radio' v-model='weeksshift' value='1' /> +1 <input type='radio' v-model='weeksshift' value='2' /> +2 <input type='radio' v-model='weeksshift' value='3' /> +3</div>
                               <div class='row'>Валюта: <select><option value='Евро'>Eur</option><option value='Рубли'>Рубли</option></div>
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

<script>
    export default {
            data() {
            return {name: '',company:'',weeks:0,weeksshift:0}
            },
            ready() {
            console.log('Component ready.')
        },
        mounted() {
            console.log('Component basket mounted.')
        }
    }
</script>
