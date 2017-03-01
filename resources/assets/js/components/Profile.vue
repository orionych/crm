<template>
	<div class='row content-panel'>
		<div class='col-lg-4 profile-text mt mb centered'>
		1
		</div>
		<div class='col-lg-4 profile-text mt mb centered'>
		2
		</div>
		<div class='col-lg-4 profile-text mt mb centered'>
		3
		</div>
	</div>
</template>

<script>
    export default {
            data() {
            return {avatar:''}
            },
            ready() {
            console.log('Avatar ready.')
        },
        mounted() {
            console.log('Component avatar mounted.')
        }
    }
</script>