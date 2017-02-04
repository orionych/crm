<template>
    <div class="container" style='width:100%'>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Корзина заказа</div>
                    <div class="panel-body">
                         <div class="row">
                            <div class='col-lg-6'>
                            <my-input :placeholder='Название' :name='name'></my-input>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
            ready() {
            console.log('Component ready.')
        },
        mounted() {
            console.log('Component basket mounted.')
        }
    }
</script>
