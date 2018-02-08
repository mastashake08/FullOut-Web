<template>

    <div class="container">
        <div class="row" >
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{user.name}}</div>
                    <transition name="fade">
                        <div class="panel-body" v-if="newData">
                            <div class="row">
                                <span class="col-xs-4">Name:</span><span class="col-xs-8"> {{user.name}}</span><br>
                            </div>
                             <div class="row">
                                 <span class="col-xs-4">Email:</span><span class="col-xs-8">  {{user.email}}</span><br>
                            </div>
                             <div class="row">
                                 <span class="col-xs-4">Program Name:</span> <span class="col-xs-8" v-if="information">{{information.program_name}}</span><br>
                            </div>
                             <div class="row">
                                 <span class="col-xs-4">Coaching Title:</span> <span class="col-xs-8" v-if="information">{{information.coaching_title}}</span><br>
                            </div>


                            <div class="row">
                                <span class="col-xs-4">School Name</span> <span class="col-xs-8" v-if="school">{{school.name}}</span><br>
                            </div>
                             <div class="row">
                                <span class="col-xs-4">School Description :</span> <span class="col-xs-8" v-if="school">{{school.description}}</span><br>
                            </div>
                             <div class="row">
                                <span class="col-xs-4">Office Phone :</span> <span class="col-xs-8" v-if="school">{{school.office_phone}}</span><br>
                            </div>
                             <div class="row">
                                <span class="col-xs-4">Cell Phone :</span> <span class="col-xs-8" v-if="school">{{school.cell_phone}}</span><br>
                            </div>
                             <div class="row">
                                <span class="col-xs-4">Office Address :</span> <span class="col-xs-8" v-if="school">{{school.office_address}}</span><br>
                            </div>
                             <div class="row">
                                <span class="col-xs-4">Tuition In State :</span> <span class="col-xs-8" v-if="school">{{school.in_state_tuition}}</span><br>
                            </div>
                             <div class="row">
                                <span class="col-xs-4">Tuition Out Of State :</span> <span class="col-xs-8" v-if="school">{{school.out_state_tuition}}</span><br>
                            </div>
                             <div class="row">
                                <span class="col-xs-4">School Website :</span> <span class="col-xs-8" v-if="school">{{school.website}}</span><br>
                            </div>
                             <div class="row">
                                <span class="col-xs-4">School Min GPA :</span> <span class="col-xs-8" v-if="school">{{school.min_gpa}}</span><br>
                            </div>
                             <div class="row">
                                <span class="col-xs-4">School Min GPA Transfer :</span> <span class="col-xs-8" v-if="school">{{school.min_gpa_transfer}}</span><br>
                            </div>
                             <div class="row">
                                <span class="col-xs-4">GPA Needed For Team :</span> <span class="col-xs-8" v-if="school">{{school.gpa_needed_for_team}}</span><br>
                            </div>
                             <div class="row">
                                <span class="col-xs-4">D.O.B. :</span> <span class="col-xs-8" v-if="school">{{school.dob}}</span><br>
                            </div>
                             <div class="row">
                                <span class="col-xs-4">School Number Hours :</span> <span class="col-xs-8" v-if="school">{{school.number_hours}}</span><br>
                            </div>
                            <div class="row">
                                <span class="col-xs-4">Other Testing</span> <span class="col-xs-8" v-if="school">{{school.other_testing}}</span><br>
                            </div>
                            <div class="row">
                                <span class="col-xs-4">Popular Scholarship Outside Program</span> <span class="col-xs-8" v-if="school">{{school.popular_scholarship_outside_program}}</span><br>
                            </div>
                            <div class="row">
                                <span class="col-xs-4">Act Score</span> <span class="col-xs-8" v-if="school">{{school.act_score}}</span><br>
                            </div>
                            <div class="row">
                                <span class="col-xs-4">Sat Score</span> <span class="col-xs-8" v-if="school">{{school.sat_score}}</span><br>
                            </div>
                            <div class="row">
                                <span class="col-xs-4">Do you offer Scholarship</span> <span class="col-xs-8" v-if="school">{{school.offer_scholarship}}</span><br>
                            </div>
                            <div class="row">
                                <span class="col-xs-4">Explain Scholarship</span> <span class="col-xs-8" v-if="school">{{school.scholarship_text}}</span><br>
                            </div>


                            <div class="pull-right">
                                <span class="glyphicon glyphicon-heart" @click="favorite()"></span>
                                <span class="glyphicon glyphicon-envelope" @click="openMessage()" data-toggle="modal" data-target="#sendMessage"></span>
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
                        <button type="button" class="btn btn-default" data-dismiss="modal" @click="sendMessage(user)">Send Message</button>
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
            information: '',
            school: '',
            newData: false
        }
    },
    props: ['user-id','main-information','user-school'],
            methods: {
        openMessage: function(){
//            $("#sendMessage").modal();
        },
        sendMessage: function(user){
            this.$http.post('/message',{_token:Laravel.csrfToken,receiver_id: this.user.id,message: this.message}).then(function(data){
            alert('Message Sent!');
//                $('#sendMessage').modal('hide');
                this.message = '';
            }).bind(this);

        },
        favorite: function(){
            this.$http.post('/favorite',{_token:Laravel.csrfToken,cheerleader_id:this.user.id}).then(function(data){
            alert('Favorited!');
            });
        },
    },
    created(){
        this.user = this.userId;
        this.school = this.userSchool;
        this.information = this.mainInformation;

        this.newData = true;
    }
}

</script>