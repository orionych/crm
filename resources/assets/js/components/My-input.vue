<template>
    <div>
    	<label>
    		<input type='text' name='name' value='' :placeholder='placeholder' />
    	</label>
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