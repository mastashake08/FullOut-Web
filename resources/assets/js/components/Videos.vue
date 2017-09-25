<template>

    <div class="container">
      <div class="row" >
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Cheerleader Videos</div>

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

                        <tr v-if="newData" v-for="(video,index) in videos.data" :key="index">
                          <td v-html="video.embed"></td>
                          <td>{{video.user.name}}</td>
                          <td>{{video.created_at}}</td>
                        </tr>
                      </tbody>
                    </transition-group>
                    </table>
                    <div class="pagination">
                      <button class="btn btn-default" @click="fetchVideos(videos.prev_page_url)"
                              :disabled="!videos.prev_page_url">
                          Previous
                      </button>
                      <span>Page {{videos.current_page}} of {{videos.last_page}}</span>
                      <button class="btn btn-default" @click="fetchVideos(videos.next_page_url)"
                              :disabled="!videos.next_page_url">Next
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
          videos: {
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
        fetchVideos: function(url){
          this.newData = false;
          this.$http.get(url).then(function(data){
            this.videos = data.data;
            this.newData = true;
          })
        }
      },
      created(){
        this.$http.get('/api/video').then(function(data){
          console.log(data);
          this.videos = data.data;
          this.newData = true;
          });
      }
    }
</script>
