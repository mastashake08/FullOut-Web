<template>

    <div class="container">
        <div class="row" >
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Teams</div>

                    <div class="panel-body">
                        <!--<form class="form-inline">-->
                            <!--<input type="text" v-model="search.team_name" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Team Name">-->
                            <!--<input type="text" v-model="search.coach_name" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Coach Name">-->

                            <!--<div class="form-radio mb-2 mr-sm-2 mb-sm-0">-->
                                <!--<label class="form-radio-label">-->
                                    <!--<input class="form-radio-input" value="women" type="radio" v-model="search.team_type"> Women-->
                                <!--</label>-->
                                <!--<label class="form-radio-label">-->
                                    <!--<input class="form-radio-input" value="men" type="radio" v-model="search.team_type"> Men-->
                                <!--</label>-->
                                <!--<label class="form-radio-label">-->
                                    <!--<input class="form-radio-input" value="coed" type="radio" v-model="search.team_type"> Coed-->
                                <!--</label>-->
                            <!--</div>-->
                            <!--<button type="button" class="btn btn-primary" v-on:click="searchTeams()">Submit</button>-->
                        <!--</form>-->
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
                                <td>{{team.team_name}}</td>
                                <td>{{team.coach_name}}</td>
                                <td>{{team.team_type}}</td>
                                <td><span class="glyphicon glyphicon-heart" v-on:click="favorite(team)"></span></td>
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
                selectedTeam: {},
                search: {},
                newData: false,
                message: ''
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
            favorite: function(team){
                this.$http.post('/favorite',{_token:Laravel.csrfToken,team_id:team.id}).then(function(data){
                    alert('Favorited!');
                });
            },
            unfavorite: function(team){
                this.$http.delete('/favorite/'+team.id).then(function(data){
                    alert('Unfavorited');
                });

            },
            searchTeams: function(){
                this.newData = false;
                this.$http.get('/api/search-team',{'params':this.search}).then(function(data){
                    this.teams = data.data;
                    this.newData = true;
                }).bind(this);
            }
        },
        created(){
            this.$http.get('/cheerleader/teams').then(function(data){
                this.teams = data.data;
                this.newData = true;
            });
        }
    }
</script>
