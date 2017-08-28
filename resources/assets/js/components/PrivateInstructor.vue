<template>
  <transition name="fade">
    <div class="container">
      <div class="row" >
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">{{instructor.name}}</div>

                  <div class="panel-body" v-if="newData">
                    <span>Name: {{instructor.name}}</span>
                    <br>
                    <span>Phone Number: {{instructor.phone}}</span>
                    <br>
                    <span>Email: {{instructor.email}}</span>
                    <br>
                    <span>City: {{instructor.city}}</span>
                    <br>
                    <span>State: {{instructor.state}}</span>
                    <br>
                    <span>Stunting Price: {{instructor.stunting_price}}</span>
                    <br>
                    <span>Tumbling Price: {{instructor.tumbling_price}}</span>
                    <div class="pull-right">
                      <a v-bind:href="'/send-message/'+instructor.id+''" class=" btn btn-default">Send Message</a>
                    </div>
                  </div>

              </div>
          </div>
      </div>
    </div>
</transition>


</template>

<script>
    export default {
       mounted() {
            console.log('Component mounted.')
        },
        data() {
          return{
          instructor: {},
          message: '',
          newData: false
        }
      },
      props: ['user'],
      methods: {
        sendMessage: function(){
          this.$http.post('/send-message',{_token:Laravel.csrf,receiver_id: this.instructor.id,message:this.message}).then(function(data){
            alert('Message Sent!');
          });
        }
      },
      created(){
        this.instructor = JSON.parse(this.user);
        this.newData = true;
      }
    }
</script>
