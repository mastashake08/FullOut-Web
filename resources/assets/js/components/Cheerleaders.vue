<template>

    <div class="container">
      <div class="row" >
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Cheerleaders</div>

                  <div class="panel-body">
                    {{users}}
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
          users: {}
        }
      },
      methods: {
        search: function(){

        },
        nextPage: function(){

        },
        previousPage: function(){

        }
      },
      created(){
        this.$http.get('/coach/cheerleaders').then(function(data){
          this.users = data.data;
          });
      }
    }
</script>
