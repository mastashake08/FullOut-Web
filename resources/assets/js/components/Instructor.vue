<template>
  <div class="container" v-if="instructor.stripe_account_id == null">

    <div class="row" >
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Complete Payment Info</div>

                <div class="panel-body">
                  Before you can begin adding services you must set up your <a href="https://connect.stripe.com/express/oauth/authorize?redirect_uri=https://fullout.jyroneparker.com/oauth/redirect&client_id=ca_BGdWmg1Pazi98atHGMcud5YuLgzBDonT">merchant account</a>
                </div>
            </div>
        </div>
    </div>


  </div>
    <div class="container" v-else>
      <div class="row" >
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Dashboard</div>

                  <div class="panel-body">

                      <div class="form-group">
                      <input type="text" class="form-control" placeholder="Tumbling Rate" name="tumbling_price" v-model="instructor.tumbling_price">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Stunting Rate" name="stunting_price" v-model="instructor.stunting_price">
                    </div>
                    <div class="form-group col-md-4">
                    <input type="text" class="form-control" placeholder="City" name="city" required v-model="instructor.city"></input>
                    </div>
                    <div class="form-group col-md-4">
                    <input type="text" class="form-control" placeholder="state" name="state" required v-model="instructor.state"></input>
                    </div>
                    <div class="form-group col-md-4">
                    <input type="text" class="form-control" placeholder="Zip" name="zip" required v-model="instructor.zip"></input>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-success" type="button" v-on:click="updateRates()">Update Rates</button>
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
          messages: [],
          instructor: {}
        }
      },
      props: ['user'],
      methods: {
        updateRates: function(){
          this.$http.post('/instructor/update-prices',{city:this.instructor.city,state:this.instructor.state,zip:this.instructor.zip,stunting_price: this.instructor.stunting_price,tumbling_price: this.instructor.tumbling_price,_token: Laravel.csrfToken })
          .then(function(data){
            if(data.data.success === true){
              alert('Info updated');
            }
            else{
              alert('Error updating prices');
            }

          }).bind(this);
        }
      },
      created(){
        this.instructor = JSON.parse(this.user);
      }
    }
</script>
