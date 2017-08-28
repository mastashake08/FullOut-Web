<template>

    <div class="container">
      <div class="row" >
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">{{user.name}}</div>
                  <transition name="fade">
                  <div class="panel-body" v-if="newData">
                    <span>Name: {{user.name}}</span>
                    <br>
                    <span>Phone Number: {{user.phone}}</span>
                    <br>
                    <span>Email: {{user.email}}</span>
                    <br>
                    <span>GPA: {{user.gpa}}</span>
                    <br>
                    <span>ACT: {{user.act_score}}</span>
                    <br>
                    <span>SAT: {{user.sat_score}}</span>
                    <br>
                    <span>City: {{user.city}}</span>
                    <br>
                    <span>State: {{user.state}}</span>
                    <br>
                    <span>Zip: {{user.zip}}</span>
                    <br>
                    <div class="pull-right">
                      <a v-bind:href="'/send-message/'+user.id+''" class=" btn btn-default">Send Message</a>
                    </div>
                  </div>
                </transition>
              </div>
          </div>
      </div>
      <!-- Modal -->
  <div id="sendMessage" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Send Message to {{user.name}}</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <textarea class="form-control" v-model="message"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" v-on:click="sendMessage">Send Message</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
          user: {},
          message: '',
          newData: false
        }
      },
      props: ['user-id'],
      methods: {
        sendMessage: function(){
          this.$http.post('/send-message',{_token:Laravel.csrf,receiver_id: this.user.id,message:this.message}).then(function(data){
            alert('Message Sent!');
          });
        }
      },
      created(){
        this.$http.get('/cheerleader/'+this.userId).then(function(data){
          this.user = data.data;
          this.newData = true;
          });
      }
    }
</script>
