<template>
    <div >
                <input type="text" id="input" v-model="message">
                <input type="text" id="input" v-model="mess">
                <p> The value of the input is : {{message}} {{mess}}</p>

            </div>
</template>


<script>
export default {


            data() {
                return {
                    message: 'hello',
                    mess: 'bye'
                }
            }

    }

</script>
