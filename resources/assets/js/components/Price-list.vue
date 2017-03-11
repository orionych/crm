<template>
    <div class="container" style='width:100%'>
        <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">Прайс-лист: <input type='text' v-model='code' @keyup='priceLoad'  />{{ code }} - {{ loading }}</div>
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
            return {code: 'new',loading:false}
            },
            ready() {
            console.log('Price-list ready.')
        },
        methods: {
            priceLoad: _.debounce(function() {
                this.loading=true;
                Vue.http.post('/equipment/list',{code: this.code}).then(response => {
                  this.code=response.data;
                }, response => {
                  console.log('error loading price list');
                });
            },500)
        },
        mounted() {
            console.log('Component price-list mounted.')
        }
    }
</script>