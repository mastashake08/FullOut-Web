<template>
  <div class="container" v-if="user.stripe_account_id == null">

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
                      <input type="text" class="form-control" placeholder="Tumbling Rate" name="tumbling_price" v-model="tumble_rate">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Stunting Rate" name="stunting_price" v-model="stunt_rate">
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
          user: {},
          tumble_rate: 0.00,
          stunt_rate: 0.00,
        }
      },
      methods: {
        updateRates: function(){
          this.$http.post('/instructor/update-prices',{stunting_price: this.stunt_rate,tumbling_price: this.tumble_rate,_token: Laravel.csrfToken })
          .then(function(data){
            if(data.data.success === true){
              alert('Prices updated');
            }
            else{
              alert('Error updating prices');
            }

          }).bind(this);
        }
      },
      created(){
        this.$http.get('/user').then(function(data){
          this.user = data.data;
          this.stunt_rate = this.user.stunting_price;
          this.tumble_rate = this.user.tumbling_price;
        });
      }
    }
</script>
