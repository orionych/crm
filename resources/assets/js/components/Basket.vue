<template>
    <div class="container" style='width:100%'>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Basket Component</div>

                    <div class="panel-body">
                        I'm an example Basket component!
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
            ready() {
            console.log('Component ready.')
        },
        mounted() {
            console.log('Component basket mounted.')
        }
    }
</script>
