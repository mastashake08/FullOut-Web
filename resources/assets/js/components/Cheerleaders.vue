<template>

    <div class="container">
      <div class="row" >
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Cheerleaders</div>

                  <div class="panel-body">
                    <form class="form-inline">
                      <input type="text" v-model="search.name" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Jane Doe">
                      <input type="text" v-model="search.highest_gpa" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Highest GPA">
                      <input type="text" v-model="search.location" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Location">
                      <input type="text" v-model="search.highest_skill_score" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Highest Skill">
                      <input type="text" v-model="search.highest_stunting_score" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Highest Stunting Score">
                      <input type="text" v-model="search.highest_tumbling_score" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Highest Tumbling Score">

                      <div class="form-radio mb-2 mr-sm-2 mb-sm-0">
                        <label class="form-radio-label">
                          <input class="form-radio-input" name="gender" type="radio"> Female
                        </label>
                        <label class="form-radio-label">
                          <input class="form-radio-input" name="gender" type="radio"> Male
                        </label>
                        <label class="form-radio-label">
                          <input class="form-radio-input" name="gender" type="radio" checked> Both
                        </label>
                      </div>


                      <button type="button" class="btn btn-primary" v-on:click="searchUsers()">Submit</button>
                    </form>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                      <tbody is="transition-group" name="fade">

                        <tr v-if="newData" v-for="(user,index) in users.data" :key="index">
                          <td><a v-bind:href="'/cheerleader/'+user.id+''" target="_blank">{{user.name}}</a></td>
                          <td>{{user.email}}</td>
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
    </div>
</template>

<script>
    export default {
       mounted() {
            console.log('Component mounted.')
        },
        data() {
          return{
          users: {},
          search: {},
          newData: false
        }
      },
      methods: {
        search: function(){

        },
        fetchUsers: function(url){
          this.newData = false;
          this.$http.get(url).then(function(data){
            this.users = data.data
            this.newData = true;
          })
        },
        searchUsers: function(){
          this.newData = false;
          this.$http.get('/api/search',{'params':this.search}).then(function(data){
            this.users = data.data;
            this.newData = true;
          }).bind(this);
        }
      },
      created(){
        this.$http.get('/coach/cheerleaders').then(function(data){
          this.users = data.data;
          this.newData = true;
          });
      }
    }
</script>
