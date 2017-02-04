<template>
    <div>
    	<label>
    	<span >{{ placeholder }}</span>    	
    	<input type='text' v-model='{{ name }}' value='' :placeholder='placeholder' />
    	</label>
    </div>
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