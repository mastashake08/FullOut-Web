<template>

    <div class="container">
        <div class="row" >
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Favorited Teams</div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Team Name</th>
                                <th>Coach Name</th>
                                <th>Team Type</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody is="transition-group" name="fade">

                            <tr v-if="newData" v-for="(team,index) in teams.data" :key="index">
                                <td>{{team.team.team_name}}</td>
                                <td>{{team.team.coach_name}}</td>
                                <td>{{team.team.team_type}}</td>
                                <td><span class="glyphicon glyphicon-minus" v-on:click="unfavorite(index)"></span></td>
                            </tr>
                            </tbody>
                            </transition-group>
                        </table>
                        <div class="pagination">
                            <button class="btn btn-default" @click="fetchTeams(teams.prev_page_url)"
                                    :disabled="!teams.prev_page_url">
                                Previous
                            </button>
                            <span>Page {{teams.current_page}} of {{teams.last_page}}</span>
                            <button class="btn btn-default" @click="fetchTeams(teams.next_page_url)"
                                    :disabled="!teams.next_page_url">Next
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
                teams: {},
                newData: false,
            }
        },
        methods: {
            fetchTeams: function(url){
                this.newData = false;
                this.$http.get(url).then(function(data){
                    this.teams = data.data;
                    this.newData = true;
                })
            },
            unfavorite: function(team){
                this.$http.post('/favorite/'+this.teams.data[team].id,{_token:Laravel.csrfToken,_method:'DELETE'}).then(function(data){
                    this.teams.data.splice(team,1);
                }).bind(this);

            },
        },
        created(){
            this.$http.get('/favorite-teams').then(function(data){
                this.teams = data.data;
                this.newData = true;
            });
        }
    }
</script>
