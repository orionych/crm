<template>
    <div class="container" style='width:100%'>
        <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">Прайс-лист: <input type='text' v-model='code' @keyup='priceLoad'  />{{ code }} - {{ state }}</div>
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
            return {code: 'new',typing:false,state:'waiting'}
            },
            ready() {
            console.log('Price-list ready.')
        },
        methods: {
            priceLoad: _.debounce(function() {
                this.typing=true;
                this.state='loading';

            },500)
        },
        mounted() {
            console.log('Component price-list mounted.')
        }
    }
</script>