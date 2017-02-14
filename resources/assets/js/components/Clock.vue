<template>
    <i class="fa fa-clock-o"> {{ value }}</i>
</template>

<script>
    export default {
        mounted() {
            console.log('Component clock mounted.'+this.value);
        },
        props: ['value']
    }
</script>
