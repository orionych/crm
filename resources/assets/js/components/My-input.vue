<template>
    <div>
    	<label>
    	<span >{{ placeholder }}</span>    	
    	<input type='text' value='' :placeholder='placeholder' />
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
	.div {
	border:1px solid #f00;
	}
</style>