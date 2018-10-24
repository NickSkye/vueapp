<template>
    <div class="container">
        <div class="">
            <div class="card-holder">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>
<p>{{ message }}</p>
  <button v-on:click="reverseMessage">Reverse Message</button>
                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {


            data() {
                return {
                    message: 'hello world'

                }
            },
            methods: {
                reverseMessage: function() {
                            this.message = this.message.split('').reverse().join('')
                        }
              }

    }

</script>