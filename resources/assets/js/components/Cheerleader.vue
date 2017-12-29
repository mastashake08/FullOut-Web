<template>

    <div class="container">
      <div class="row" >
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">{{user.name}}</div>
                  <transition name="fade">
                  <div class="panel-body" v-if="newData">
                    <div><img :src="'/images/profile-pics/' + user.profile_pic" class="profile_img" alt=""></div>
                      <span>Name: {{user.name}}</span><br>
                      <span>Gender: {{user.main_information_student.gender}}</span><br>
                      <span>Email: {{user.email}}</span><br>
                      <span>Address: {{user.main_information_student.address}}</span><br>
                      <span>City: {{user.main_information_student.city}}</span><br>
                      <span>Zip: {{user.main_information_student.zip}}</span><br>
                      <span>Dob: {{user.main_information_student.dob}}</span><br>
                      <span>School Type: {{user.main_information_student.school_type}}</span><br>
                      <span>Current School: {{user.main_information_student.current_school}}</span><br>
                      <span>Current Year: {{user.main_information_student.current_year}}</span><br>
                      <span>Current Gpa: {{user.main_information_student.current_gpa}}</span><br>
                      <span>Act Score: {{user.main_information_student.act_score}}</span><br>
                      <span>Highest Sat: {{user.main_information_student.highest_sat}}</span><br>
                      <span>Bio: {{user.main_information_student.bio}}</span><br>
                      <span>Weight: {{user.main_information_student.weight}}</span><br>
                      <span>Height: {{user.main_information_student.height}}</span><br>
                      <span>Current program timeline: {{user.main_information_student.current_program_timeline}}</span><br>
                      <span>Past program timeline: {{user.main_information_student.past_program_timeline}}</span><br>
                      <span>Accolades: {{user.main_information_student.accolades}}</span><br>
                      <span>Cheertype: </span><span v-for="type in user.main_information_student.cheertype">{{ type }}; </span><br>
                      <span>Visibility: {{user.main_information_student.visibility}}</span><br>
                      <span>Looking for: {{user.main_information_student.looking_for}}</span><br>
                      <span>Description: {{user.main_information_student.description}}</span>
                      <br>
                    <div class="pull-right">
                      <span class="glyphicon glyphicon-heart" @click="favorite()"></span>
                      <span class="glyphicon glyphicon-envelope" @click="openMessage()"></span>
                    </div>
                  </div>
                </transition>
              </div>
          </div>
      </div>
      <div class="row" >
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Videos</div>
                  <transition name="fade">
                  <div class="panel-body" v-if="newData">
                  <ul>
                    <li  style="list-style: none;" v-for="video in user.videos">
                        <iframe :src="video.embed" frameborder="0"></iframe>
                      <!--<span v-html="video.embed"></span>-->
                    </li>
                  </ul>
                  </div>
                </transition>
              </div>
          </div>
      </div>
      <div class="row" >
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Awards</div>
                  <transition name="fade">
                  <div class="panel-body" v-if="newData">
                  <ul>
                    <li style="list-style: none;" v-for="award in user.awards">
                      {{award.award}}
                    </li>
                  </ul>
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
          <button type="button" class="btn btn-default" v-on:click="sendMessage(user)">Send Message</button>
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
        openMessage: function(){
          $("#sendMessage").modal();
        },
        sendMessage: function(user){
          this.$http.post('/message',{_token:Laravel.csrfToken,receiver_id: this.user.id,message: this.message}).then(function(data){
            alert('Message Sent!');
            $('#sendMessage').modal('hide');
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
        this.newData = true;
    }
    }

</script>
