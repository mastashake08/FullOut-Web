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

                            <tr id="demo" v-if="newData" v-for="(team,index) in teams.data" :key="index">
                                <td><a :href="'/cheerleader/teams/'+team.team.id">{{team.team.team_name}}</a></td>
                                <td>{{team.team.coach_name}}</td>
                                <td>{{team.team.team_type}}</td>
                                <td><span class="glyphicon glyphicon-minus curs-pointer" @click="openModal(index,team.team.team_name)" data-toggle="modal" data-target=".bs-delete-modal-sm"></span></td>
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
        <div class="modal fade bs-delete-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Delete</h4>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure to delete team '{{teamName}}'<span class="delete-modal-content"></span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="hidden" name="product_id" value="" class="delete-modal-form-input-hidden">
                        <button type="submit" data-dismiss="modal" class="btn btn-danger ml-10 delete-sure" @click="unfavorite(team)">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>


    export default {

        mounted() {
            this.$eventHub.$on('eventFired', () => {
                 this.newteams();

             });
        },
        data() {
            return{
                teams: {},
                newData: false,
                teamName: null,
                team: null,
                newteam: null
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
            openModal: function(team,name){
                this.team = team;
                this.teamName = name;
            },
            newteams: function(){
                this.$http.get('/favorite-teams').then(function(data){
                    this.teams = data.data;
                    this.newData = true;
                });
            }
        },
        created(){
            this.$http.get('/favorite-teams').then(function(data){
                this.teams = data.data;
                this.newData = true;
            });
        }
    }
</script>
