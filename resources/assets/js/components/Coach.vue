<template>

    <div class="container">
        <div class="row" >
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{user.name}}</div>
                    <transition name="fade">
                        <div class="panel-body" v-if="newData">
                            <!--<div><img :src="'/images/profile-pics/' + user.profile_pic" class="profile_img" alt=""></div>-->
                            <div class="row">
                                <span class="col-xs-2">Name:</span><span class="col-xs-10"> {{user.name}}</span><br>
                            </div>
                             <div class="row">
                                 <span class="col-xs-2">Email:</span><span class="col-xs-10">  {{user.email}}</span><br>
                            </div>
                             <div class="row">
                                 <span class="col-xs-2">Program Name:</span> <span class="col-xs-10" v-if="information">{{information.program_name}}</span><br>
                            </div>
                             <div class="row">
                                 <span class="col-xs-2">Coaching Title:</span> <span class="col-xs-10" v-if="information">{{information.coaching_title}}</span><br>
                            </div>
                             <div class="row">
                                 <span class="col-xs-3">Financial Requirements:</span> <span class="col-xs-9" v-if="information">{{information.financial_requirements}}</span><br>
                            </div>
                             <div class="row">
                                 <span class="col-xs-5">Are there the same information for all teams:</span> <span class="col-xs-7" v-if="information">{{information.same_information}}</span><br>
                            </div>
                             <div class="row">
                                 <span class="col-xs-3">Tuition cost in state: </span><span class="col-xs-9" v-if="information">{{information.tuition_cost_in}}</span><br>
                            </div>
                            <div class="row">
                                <span class="col-xs-3">Tuition cost out of state: </span><span class="col-xs-9" v-if="information">{{information.tuition_cost_out}}</span><br>
                            </div>
                             <div class="row">
                                 <span class="col-xs-4">Description of cheer program:</span> <span class="col-xs-8" v-if="information">{{information.description_program}}</span><br>
                            </div>

                            <div class="pull-right">
                                <span class="glyphicon glyphicon-heart" @click="favorite()"></span>
                                <span class="glyphicon glyphicon-envelope" @click="openMessage()"></span>
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
                        <button type="button" class="btn btn-default" @click="sendMessage(user)">Send Message</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

</template>

<script>
    export default {
        data() {
        return{
            user: {},
            message: '',
            newData: false
        }
    },
    props: ['user-id','main-information'],
            methods: {
        openMessage: function(){
            $("#sendMessage").modal();
        },
        sendMessage: function(user){
            this.$http.post('/message',{_token:Laravel.csrfToken,receiver_id: this.user.id,message: this.message}).then(function(data){
//            alert('Message Sent!');
                $('#sendMessage').modal('hide');
                this.message = '';
            }).bind(this);

        },
        favorite: function(){
            this.$http.post('/favorite',{_token:Laravel.csrfToken,cheerleader_id:this.user.id}).then(function(data){
//            alert('Favorited!');
            });
        },
    },
    created(){
        this.user = this.userId;
        this.information = this.mainInformation;

        this.newData = true;
    }
    }

</script>