<template>

    <div class="container">
      <div class="row" >
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">SOS Alerts</div>

                  <div class="panel-body">
                    <table class="table table-responsive">
                      <thead>
                        <tr>
                          <th>Video</th>
                          <th>Cheerleader</th>
                          <th>Posted Date</th>
                        </tr>
                      </thead>
                      <tbody is="transition-group" name="fade">

                        <tr v-if="newData" v-for="(video,index) in alerts.data" :key="index">
                          <td v-html="video.embed"></td>
                          <td>{{video.user.name}}</td>
                          <td>{{video.created_at}}</td>
                        </tr>
                      </tbody>
                    </transition-group>
                    </table>
                    <div class="pagination">
                      <button class="btn btn-default" @click="fetchalerts(alerts.prev_page_url)"
                              :disabled="!alerts.prev_page_url">
                          Previous
                      </button>
                      <span>Page {{alerts.current_page}} of {{alerts.last_page}}</span>
                      <button class="btn btn-default" @click="fetchalerts(alerts.next_page_url)"
                              :disabled="!alerts.next_page_url">Next
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
          alerts: {
            data: [],
            current_page: '',
            prev_page_url: '',
            next_page_url: '',
            last_page: ''
          },
          newData: false
        }
      },
      methods: {
        fetchalerts: function(url){
          this.newData = false;
          this.$http.get(url).then(function(data){
            this.alerts = data.data;
            this.newData = true;
          })
        }
      },
      created(){
        this.$http.get('/api/sos').then(function(data){
          console.log(data);
          this.alerts = data.data;
          this.newData = true;
          });
      }
    }
</script>
