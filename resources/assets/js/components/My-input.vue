<template>
    	<label>
    	<transition name="fade" mode="out-in">
    	<span v-if=value.length >{{ placeholder }} </span>    	
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
	height:50px;
	border:1px solid #f00;
	}
	label span {
	transition: all 0.5s;
	z-index:1;
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
	.fade-enter,  .fade-leave-to
	{
	  transform: translateY(25px);
	}
	.fade-leave-active,.fade-enter-active {
	  position: absolute;
	}
	.fade-leave-active {
	animation: bounce-out .5s;
	}
	.fade-enter-active {
	 animation: bounce-in .5s;
	}
	@keyframes bounce-in {
	  0% {
	    transform: scale(0);
	  transform: translateY(25px);
	  }
	  50% {
	    transform: scale(1.5);
	  transform: translateY(25px);
	  }
	  100% {
	    transform: scale(1);
	  transform: translateY(25px);
	  }
	}
	@keyframes bounce-out {
	  0% {
	    transform: scale(1);
	  transform: translateY(25px);
	  }
	  50% {
	    transform: scale(1.5);
	  transform: translateY(25px);
	  }
	  100% {
	    transform: scale(0);
	  transform: translateY(25px);
	  }
	}
</style>