<template>

    <div class="container">
      <div class="row" >
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">{{user.name}}</div>
                  <transition name="fade">
                  <div class="panel-body" v-if="newData">
                    <div><img :src="'/images/profile-pics/' + user.profile_pic" class="profile_img" alt=""></div>
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
                    <span>Bio: {{user.bio}}</span>
                    <br>
                    <span>Height: {{user.height}}</span>
                    <br>
                    <span>Weight: {{user.weight}}</span>
                    <br>
                    <span>Looking For: {{user.looking_for}}</span>
                    <br>
                    <span>Cheerleader Type: {{user.cheertype}}</span>
                    <br>
                    <span>Current Team: {{user.current_team}}</span>
                    <br>
                    <div class="pull-right">
                      <span class="glyphicon glyphicon-heart" v-on:click="favorite()"></span>
                      <span class="glyphicon glyphicon-envelope" v-on:click="openMessage()"></span>
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
