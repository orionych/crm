<template>
    	<label>
    	<transition name="fade">
    	<span v-show=value.length >{{ placeholder }} </span>    	
    	</transition>
    	<input type='text' :name="name" v-model="value" :placeholder='placeholder' />
    	</label>
</template>


<script>
    export default {
        mounted() {
            console.log('input mounted');
        },
        props: ['placeholder','name','my-value'],
        data: function() {
        return {value:''}
        }
    }
</script>

<style>
	label {
	display:block;
	position:relative;
	z-index:1;
	height:50px;
	border:1px solid #f00;
	}
	label span {
	transition: all 1s;
	font-size:8pt;
	}
	label input {
	position:absolute;
	z-index:0;
	width:100%;
	border:none;
	top:20px;
	left:0px;
	}
	/* Transition */
	.fade-enter, .fade-leave-to
	/* .fade-leave-active for <2.1.8 */ {
	  opacity: 0;
	  transform: translateY(30px);
	}
	.fade-leave-active {
	  position: absolute;
	}


</style>