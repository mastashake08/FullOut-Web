<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Messages</div>

                    <div class="panel-body">
                        <ul id="message-list">
                          <li v-for="(message,index) in messages">
                            {{message.content}}
                          </li>
                        </ul>
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
          return{
          messages: []
        }
        },
        created(){
          this.$http.get('/message').then(function(data){
            console.log(data);
            this.messages = data;
          });
        }
    }
</script>
