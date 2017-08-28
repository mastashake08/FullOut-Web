<template>

    <div class="container">
      <div class="row" >
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Private Instructors</div>

                  <div class="panel-body">
                    <form class="form-inline">
                      <input type="text" v-model="search.name" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Jane Doe">
                      <input type="text" v-model="search.city" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="City">
                      <input type="text" v-model="search.state" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="State">
                      <input type="text" v-model="search.highest_stunting_price" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Highest Stunting Price">
                      <input type="text" v-model="search.highest_tumbling_price" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Highest Tumbling Price">

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
                          <th>Phone</th>
                          <th>City</th>
                          <th>State</th>
                          <th>Tumbling Price</th>
                          <th>Stunting Price</th>
                        </tr>
                      </thead>
                      <tbody is="transition-group" name="fade">

                        <tr v-if="newData" v-for="(user,index) in users.data" :key="index">
                          <td><a v-bind:href="'/instructor/'+user.id+''" target="_blank">{{user.name}}</a></td>
                          <td>{{user.phone}}</td>
                          <td>{{user.city}}</td>
                          <td>{{user.state}}</td>
                          <td>{{user.tumbling_price}}</td>
                          <td>{{user.stunting_price}}</td>
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
        fetchUsers: function(url){
          this.newData = false;
          this.$http.get(url).then(function(data){
            this.users = data.data
            this.newData = true;
          })
        },
        searchUsers: function(){
          this.newData = false;
          this.$http.get('/api/search/instructor',{'params':this.search}).then(function(data){
            this.users = data.data;
            this.newData = true;
          }).bind(this);
        }
      },
      created(){
        this.$http.get('/api/instructor').then(function(data){
          this.users = data.data;
          this.newData = true;
          });
      }
    }
</script>
