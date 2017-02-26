<template>
    <div class="container" style='width:100%'>
        <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">Прайс-лист: <input type='text' v-model='newcode'  /> {{ newcode }}</div>
                    <div class="panel-body">
                         <div class="row">
                         here new values
                         </div>
                    </div>
                </div>
        </div>
    </div>
</template>

<script>
    export default {
            data() {
            return {newcode: 'new'}
            },
            ready() {
            console.log('Price-list ready.')
        },
        mounted() {
            console.log('Component price-list mounted.')
        }
    }
</script>