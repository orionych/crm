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
            return {code: 'new',loading:false}
            },
            ready() {
            console.log('Price-list ready.')
        },
        methods: {
            priceLoad: _.debounce(function() {
                this.loading=true;
                Vue.http.post('/equipment/',{code: this.code}).then(response => {
                  useronlinestarted=false;
                  console.log(response.body);
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