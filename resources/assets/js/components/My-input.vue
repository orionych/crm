<template>
    	<label>
    	<span >{{ placeholder }} {{ value }}</span>    	
    	<input type='text' :name="name" :value="value" :placeholder='placeholder' />
    	</label>
</template>


<script>
    export default {
        mounted() {
            console.log('input mounted');
        },
        props: ['placeholder','name','value'],
        data: function() {
        return {value:''}
        }
    }
</script>

<style>
	label {
	display:block;
	position:relative;
	height:50px;
	border:1px solid #f00;
	}
	label span {
	font-size:8pt;
	}
	label input {
	position:absolute;
	width:100%;
	border:none;
	top:20px;
	left:0px;
	}
</style>