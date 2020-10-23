<template>

   <div>
       <h1>Form</h1>


            <input type="text" v-model="form.name">

            <button @click="submit">Submit</button>




   </div>

</template>

<script>


    export default {
        components: {

        },
        props: {},

        computed: {},

        data() {
            return {
                form: {
                    name: ''
                }


            }
        },
        mounted: function () {
        },
        methods: {
            submit(){
                this.$inertia.post('/form', this.form)
                .then(() => {


                });
            }

        }

    }
</script>
