<template>
  <transition name="fade">
    <div class="container" v-show="show">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Sent Messages with {{ messageWith.name }}</div>

                    <div class="panel-body messages-body">
                      <div class="table-responsive">

                        <div class="overflow-hidden mb-2" v-for="(message,index) in messages">

                            <div :class="messageWith.id == message.sender.id ? 'other-sms' : 'my-sms'">{{ message.message }}</div>
                            <div :class="messageWith.id == message.sender.id ? 'pull-left ml-2' : 'pull-right mr-2'"><button class="btn btn-danger pull-right" @click="deleteMessageModal(message.id, index, 'sent')" data-toggle="modal" data-target=".bs-delete-modal-sm">Delete</button></div>
                        </div>

                        <div><button class="btn btn-info pull-right" @click="openMessage(messageWith)" data-toggle="modal" data-target="#sendMessage"><span class="glyphicon glyphicon-envelope" ></span> Reply</button></div>
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
        data(){
          return{
          messages: [],
          user: {},
          messageWith:'',
          messageId: '',
          status: '',
          messageIndex: '',
          message: '',
          show: false
            }
        },
        props:['all-messages','with'],

        methods: {
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
                    this.messages.splice(messageIndex,1);
                }).bind(this);

            },
              sendMessage: function(user){
                this.$http.post('/message',{_token:Laravel.csrfToken,receiver_id: user.id,message: this.message}).then(function(data){
                    this.messages = data.body.message;
                    this.messages;

                    this.message = '';
                }).bind(this);
              },
        },
        created(){
            this.messages = this.allMessages;
            this.messageWith = this.with;
            this.show = true;
        }
    }
</script>
