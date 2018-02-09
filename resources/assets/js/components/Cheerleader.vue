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
                      <span>Email: {{user.email}}</span><br>
                      <span>Address: <span v-if="user.main_information_student">{{user.main_information_student.address}}</span></span><br>
                      <span>Gender: <span v-if="user.main_information_student">{{user.main_information_student.gender}}</span></span><br>
                      <span>City: <span v-if="user.main_information_student">{{user.main_information_student.city}}</span></span><br>
                      <span>Zip: <span v-if="user.main_information_student">{{user.main_information_student.zip}}</span></span><br>
                      <span>Dob: <span v-if="user.main_information_student">{{user.main_information_student.dob}}</span></span><br>
                      <span>School Type: <span v-if="user.main_information_student">{{user.main_information_student.school_type}}</span></span><br>
                      <span>Current School: <span v-if="user.main_information_student">{{user.main_information_student.current_school}}</span></span><br>
                      <span>Current Year: <span v-if="user.main_information_student">{{user.main_information_student.current_year}}</span></span><br>
                      <span>Current Gpa: <span v-if="user.main_information_student">{{user.main_information_student.current_gpa}}</span></span><br>
                      <span>Act Score: <span v-if="user.main_information_student">{{user.main_information_student.act_score}}</span></span><br>
                      <span>Highest Sat: <span v-if="user.main_information_student">{{user.main_information_student.highest_sat}}</span></span><br>
                      <span>Bio: <span v-if="user.main_information_student">{{user.main_information_student.bio}}</span></span><br>
                      <span>Weight: <span v-if="user.main_information_student">{{user.main_information_student.weight}}</span></span><br>
                      <span>Height: <span v-if="user.main_information_student">{{user.main_information_student.height}}</span></span><br>
                      <span>Current program timeline: <span v-if="user.main_information_student">{{user.main_information_student.current_program_timeline}}</span></span><br>
                      <span>Past program timeline: <span v-if="user.main_information_student">{{user.main_information_student.past_program_timeline}}</span></span><br>
                      <span>Accolades: <span v-if="user.main_information_student">{{user.main_information_student.accolades}}</span></span><br>
                      <span>Cheertype: <span v-if="user.main_information_student"><span v-for="type in user.main_information_student.cheertype">{{ type }} </span></span></span><br>
                      <span>Visibility: <span v-if="user.main_information_student">{{user.main_information_student.visibility}}</span></span><br>
                      <span>Looking for: <span v-if="user.main_information_student">{{user.main_information_student.looking_for}}</span></span><br>
                      <span>Description: <span v-if="user.main_information_student">{{user.main_information_student.description}}</span></span>
                      <br>
                    <div class="pull-right">
                      <span class="glyphicon glyphicon-heart" @click="favorite()"></span>
                      <span class="glyphicon glyphicon-envelope" @click="openMessage()" data-toggle="modal" data-target="#sendMessage"></span>
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
              newData: false
            }
      },
      props: ['user-id'],
      methods: {
        openMessage: function(){

        },
        sendMessage: function(user){
          this.$http.post('/message',{_token:Laravel.csrfToken,receiver_id: this.user.id,message: this.message}).then(function(data){
              if(data.data.success == false){
                  alert("Error! Can't Send Message!");
              }else{
                  alert('Message Sent!');
              }

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
