<template>
    <i class="fa fa-clock-o"> {{ clocktime }}</i>
</template>

<script>
    export default {
        mounted() {
            console.log('Component clock mounted.'+this.clocktime);
        },
        props: ['clocktime']
    }
</script>
