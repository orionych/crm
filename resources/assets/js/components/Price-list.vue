<template>
    <div class="container row" style='width:100%'>
                <div class="panel panel-default">
                    <div class="panel-heading">Прайс-лист: <input size=40 type='text' v-model.trim='code' @keyup='loading=true, priceLoad()'  /> <i v-show='loading' class="fa fa-spinner fa-spin fa-fw"></i> 
                        <span v-if='equipments.length>0 && !loading && code.length>2'>Результатов - {{ equipments.length }}</span>
                    </div>
                    <div class="panel-body">
                         <div class="row">
                         <ul v-if=equipments.length class='nav nav-pills nav-stacked'>
                            <li v-for='equipment in equipments'>{{ equipment.text }}</li>
                         </ul>
                         </div>
                    </div>
                </div> 
    </div>
</template>

<script>
    export default {
            data() {
            return {code: '',loading:false,equipments:[]}
            },
            ready() {
            console.log('Price-list ready.')
        },
        methods: {
            priceLoad: _.debounce(function() {
            if (this.code.length>2) {
                Vue.http.post('/equipment/list',{code: this.code}).then(response => {
                this.equipments=response.data;
                this.loading=false;
                  console.log(response.data);
                }, response => {
                  console.log('error loading price list');
                });} else {this.loading=false;}
            },500)
        },
        mounted() {
            console.log('Component price-list mounted.')
        }
    }
</script>