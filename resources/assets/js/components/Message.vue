<template>
  <transition name="fade">
    <div class="container" v-show="show">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Sent Messages</div>

                    <div class="panel-body">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Sender</th>
                              <th>Receiver</th>
                              <th>Message</th>
                            </tr>
                          </thead>
                          <tbody>

                            <tr v-for="(message,index) in messages.messages.sent">
                              <td>{{message.sender.name}}</td>
                              <td>{{message.receiver.name}}</td>
                              <td><p>{{message.message}} </p> </td>
                              <td><button class="btn btn-info pull-right" @click="openMessage(message.receiver)" data-toggle="modal" data-target="#sendMessage"><span class="glyphicon glyphicon-envelope" ></span> Reply</button></td>
                              <td> <button class="btn btn-danger pull-right" @click="deleteMessageModal(message.id, index, 'sent')" data-toggle="modal" data-target=".bs-delete-modal-sm">Delete</button></td>
                            </tr>

                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Received Messages</div>

                    <div class="panel-body">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Sender</th>
                              <th>Received</th>
                              <th>Message</th>
                              <th></th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>

                            <tr v-for="(message,index) in messages.messages.received">
                              <td>{{message.sender.name}}</td>
                              <td>{{message.receiver.name}}</td>
                              <td><p>{{message.message}}</p> </td>
                              <td> <button class="btn btn-info pull-right" @click="openMessage(message.sender)" data-toggle="modal" data-target="#sendMessage"><span class="glyphicon glyphicon-envelope" ></span> Reply</button></td>
                              <td> <button class="btn btn-danger pull-right" @click="deleteMessageModal(message.id, index, 'received')" data-toggle="modal" data-target=".bs-delete-modal-sm">Delete</button></td>
                            </tr>

                          </tbody>
                        </table>
                      </div>
                    </div>
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
            <button type="button" class="btn btn-default" @click="sendMessage(user)" data-dismiss="modal">Send Message</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
    </div>
  </div>

        <div class="modal fade bs-delete-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Delete</h4>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure to delete message ?<span class="delete-modal-content"></span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="hidden" name="product_id" value="" class="delete-modal-form-input-hidden">
                        <button type="submit" data-dismiss="modal" class="btn btn-danger ml-10 delete-sure" @click="deleteMessage(messageId, messageIndex)">Delete</button>
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

        },
        data() {
          return{
          messages: [],
          user: {},
          messageId: '',
          status: '',
          messageIndex: '',
          message: '',
          show: false
        }
        },methods: {
          openMessage: function(user){
            this.user = user;

          },
        deleteMessageModal: function(messageId, messageIndex,status){
            this.messageId = messageId;
            this.messageIndex = messageIndex;
            this.status = status;
          },
        deleteMessage: function(messageId,messageIndex){

            this.$http.post('/message/'+ messageId,{_token:Laravel.csrfToken,_method:'DELETE'}).then(function(data){
                if(this.status == 'sent'){
                    this.messages.messages.sent.splice(messageIndex,1);
                }
                else if(this.status == 'received'){
                    this.messages.messages.received.splice(messageIndex,1);
                }
            }).bind(this);

        },
          sendMessage: function(user){
            this.$http.post('/message',{_token:Laravel.csrfToken,receiver_id: user.id,message: this.message}).then(function(data){
              this.$http.get('/message').then(function(data){
                this.messages = data.data;
                  this.messages.messages.received.reverse();
                  this.messages.messages.sent.reverse();
                this.show = true;
              });

              this.message = '';
            }).bind(this);

          },
        },
        created(){
          this.$http.get('/message').then(function(data){
            this.messages = data.data;
              this.messages.messages.received.reverse();
              this.messages.messages.sent.reverse();
              this.show = true;
          });
        }
    }
</script>
