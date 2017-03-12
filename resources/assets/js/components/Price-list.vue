<template>
    <div class="container" style='width:100%'>
        <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">Прайс-лист: <input size=40 type='text' v-model='code' @keyup='priceLoad(), loading=true'  /> <i v-if='loading' class="fa fa-spinner fa-spin fa-fw"></i><span v-if='equipments.length&!loading'>Результатов - {{ equipments.length }}</span></div>
                    <div class="panel-body">
                         <div class="row">
                         <ul v-if=equipments.length class='pricing'>
                            <li v-for='equipment in equipments'>{{ equipment.text }}</li>
                         </ul>
                         </div>
                    </div>
                </div> 
        </div>
    </div>
</template>

<script>
    export default {
            data() {
            return {code: 'new',loading:false,equipments:[]}
            },
            ready() {
            console.log('Price-list ready.')
        },
        methods: {
            priceLoad: _.debounce(function() {
                Vue.http.post('/equipment/list',{code: this.code}).then(response => {
                this.equipments=response.data;
                this.loading=false;
                  console.log(response.data);
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