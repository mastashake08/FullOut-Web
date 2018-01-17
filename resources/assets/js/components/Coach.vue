<template>

    <div class="container">
        <div class="row" >
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{user.name}}</div>
                    <transition name="fade">
                        <div class="panel-body" v-if="newData">
                            <!--<div><img :src="'/images/profile-pics/' + user.profile_pic" class="profile_img" alt=""></div>-->
                            <span>Name: {{user.name}}</span><br>
                            <span>Email: {{user.email}}</span><br>
                            <span>Program Name: <span v-if="information">{{information.program_name}}</span></span><br>
                            <span>Coaching Title: <span v-if="information">{{information.coaching_title}}</span></span><br>
                            <span>Financial Requirements: <span v-if="information">{{information.financial_requirements}}</span></span><br>
                            <span>Are there the same information for all teams: <span v-if="information">{{information.same_information}}</span></span><br>
                            <span>Tuition cost: <span v-if="information">{{information.tuition_cost}}</span></span><br>
                            <span>Description of cheer program: <span v-if="information">{{information.description_program}}</span></span><br>
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