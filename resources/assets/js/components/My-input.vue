<template>
    	<label>
    	<span v-show=value.length>0 >{{ placeholder }}</span>    	
    	<input type='text' :name="name" :value='value' :placeholder='placeholder' />
    	</label>
</template>


<script>
    export default {
        mounted() {
            console.log('input mounted');
        },
        props: ['placeholder','name']
    }
</script>

<style>
	label {
	display:block;
	font-size:10pt;
	position:relative;
	height:50px;
	border:1px solid #f00;
	}
	label input {
	position:absolute;
	width:100%;
	border:none;
	top:20px;
	left:0px;
	}
</style>