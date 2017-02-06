<template>
    	<label>
    	<transition name="fade" mode="out-in">
    	<span v-if=value.length >{{ placeholder }} </span>    	
    	</transition>
    	<input type='text' v-model="value" @change=updateValue($event.target.value) :placeholder='placeholder' />
    	</label>
</template>


<script>
    export default {
        mounted() {
            console.log('input mounted');
        },
        props: ['placeholder','value'],
        methods: {
	    updateValue: function (value) {
	    	this.$emit('input',  value);
	    }
	    }
    }
</script>

<style>
	label {
	display:block;
	position:relative;
	height:40px;
	border:1px solid #f00;
	margin-bottom:5px;
	border-radius:4px;
	}
	label span {
	transition: all 0.25s;
	z-index:1;
	font-size:8pt;
	}
	label input {
	position:absolute;
	z-index:0;
	width:100%;
	border:none;
	top:15px;
	left:0px;
	}
	input:focus,
	select:focus,
	textarea:focus,
	button:focus {
	    outline: none;
	}
	/* Transition */
	.fade-enter,  .fade-leave-to
	{
	  transform: translateY(20px);
	}
	.fade-leave-active,.fade-enter-active {
	  position: absolute;
	}



</style>