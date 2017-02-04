<template>
    <div>
    	<label>
    		<span >{{ placeholder }}</span>
    	</label>
    	<input type='text' v-model='name' value='' :placeholder='placeholder' />
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