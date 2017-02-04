<template>
    <div>
    	<label>
    		<span v-show='name.length>0'>{{ placeholder }}</span>
    	</label>
    	<input type='text' v-model='name' value='' :placeholder='placeholder' />
    </div>
</template>


<script>
    export default {
        mounted() {
            console.log('input mounted');
        },
        props: ['placeholder']
    }
</script>

<style>
	.div {
	border:1px solid #f00;
	}
</style>