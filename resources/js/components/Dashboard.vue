<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <!--                    <div class="card-header">Example Component</div>-->
                    <div class="card-header">{{ msg }}</div>
                    <div class="card-body" >

                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    },
    data() {
        return {
            msg: "THis is dashboard"
        }
    }

}
</script>
