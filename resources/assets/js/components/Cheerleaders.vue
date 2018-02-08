<template>

    <div class="container">
      <div class="row" >
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Cheerleaders</div>

                  <div class="panel-body">
                    <form class="form-inline">
                      <input type="text" v-model="search.name" class="form-control mb-2 mr-sm-2 mb-sm-0"  placeholder="Jane Doe">
                      <input type="text" v-model="search.age" class="form-control mb-2 mr-sm-2 mb-sm-0"  placeholder="Age">
                      <input type="text" v-model="search.current_gpa" class="form-control mb-2 mr-sm-2 mb-sm-0"  placeholder="GPA">
                      <input type="text" v-model="search.city" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="City">
                      <input type="text" v-model="search.state" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="State">
                      <input type="text" v-model="search.zip" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="ZIP">
                      <input type="text" v-model="search.spring_tumbling_score" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Min Spring Tumbling Score">
                      <input type="text" v-model="search.hard_tumbling_score" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Min Hard Tumbling Score">
                        <label for="group-stunting" class="form-control mb-2 mr-sm-2 mb-sm-0">Group Stunting
                            <input id="group-stunting" type="checkbox" v-model="search.group_stunting_score">
                        </label>

                        <label for="coed-stunting" class="form-control mb-2 mr-sm-2 mb-sm-0">Coed Stunting
                            <input id="coed-stunting" type="checkbox" v-model="search.coed_stunting_score">
                        </label>


                      <!--<input type="text" v-model="search.highest_tumbling_score" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Highest Tumbling Score">-->

                      <div class="form-radio mb-2 mr-sm-2 mb-sm-0">
                        <label class="form-radio-label">
                          <input class="form-radio-input" value="female" type="radio" v-model="search.gender"> Female
                        </label>
                        <label class="form-radio-label">
                          <input class="form-radio-input" value="male" type="radio" v-model="search.gender"> Male
                        </label>
                      </div>


                      <button type="button" class="btn btn-primary" @click="searchUsers()">Submit</button>
                    </form>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Photo</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Age</th>
                          <th>GPA</th>
                          <th>City</th>
                          <th>State</th>
                          <th>Zip</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody is="transition-group" name="fade">

                        <tr v-for="(user,index) in users" :key="index">
                          <td><img width="50" height="50" class="img img-circle":src="'/images/profile-pics/'+user.profile_pic"/></td>
                          <td><a :href="'/cheerleader/'+user.id">{{user.name}}</a></td>
                          <td>{{user.email}}</td>
                          <td>{{user.main_information_student.age}}</td>
                          <td>{{user.main_information_student.current_gpa}}</td>
                          <td>{{user.main_information_student.city}}</td>
                          <td>{{user.main_information_student.state}}</td>
                          <td>{{user.main_information_student.zip}}</td>
                          <td>
                            <span class="glyphicon glyphicon-heart" @click="favorite(user)"></span>
                            <span class="glyphicon glyphicon-envelope" @click="openMessage(user)" data-toggle="modal" data-target="#sendMessage"></span>
                          </td>
                        </tr>
                      </tbody>
                      </transition-group>
                    </table>
                    <div class="pagination">
                      <button class="btn btn-default" @click="fetchUsers(users.prev_page_url)"
                              :disabled="!users.prev_page_url">
                          Previous
                      </button>
                      <span>Page {{users.current_page}} of {{users.last_page}}</span>
                      <button class="btn btn-default" @click="fetchUsers(users.next_page_url)"
                              :disabled="!users.next_page_url">Next
                      </button>
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
          <h4 class="modal-title">Send Message to {{selectedUser.name}}</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <textarea class="form-control" v-model="message"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" @click="sendMessage(selectedUser)" data-dismiss="modal">Send Message</button>
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

        },
        data() {
          return{
          users: {},
          selectedUser: {},
          search: {},
          newData: false,
          message: ''
        }
      },
      methods: {
        openMessage: function(user){
          this.selectedUser = user;
//          $("#sendMessage").modal();
        },
        sendMessage: function(user){
          this.$http.post('/message',{_token:Laravel.csrfToken,receiver_id: user.id,message: this.message}).then(function(data){
            alert('Message Sent!');
//            $('#sendMessage').modal('hide');
            this.message = '';
          }).bind(this);

        },
        fetchUsers: function(url){
          this.newData = false;
          this.$http.get(url).then(function(data){
            this.users = data.data;
            this.newData = true;
          })
        },
        favorite: function(user){
          this.$http.post('/favorite',{_token:Laravel.csrfToken,cheerleader_id:user.id}).then(function(data){
            alert('Favorited!');
          });
        },
        unfavorite: function(user){
          this.$http.delete('/favorite/'+user.id).then(function(data){
            alert('Unfavorited');
          });

        },
        searchUsers: function(){
          this.newData = false;

          this.$http.post('/cheerleader/search',{_token:Laravel.csrfToken,'params':this.search}).then(function(data){

            this.users = data.data;
            this.newData = true;
          }).bind(this);
        }
      },
      created(){
        this.$http.post('/coach/find-cheerleaders',{_token:Laravel.csrfToken}).then(function(data){

          this.users = data.data.data;
          this.newData = true;
          });
      }
    }
</script>
