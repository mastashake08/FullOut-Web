@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
              <div class="panel-heading">Team Skillset</div>

              <div class="panel-body">
                  Select the skills your team is looking for, and we will
                  curate a list of potential cheerleader candidates for you!
                  In addition cheerleaders can not contact you unless they have
                  at least 70% of the skills you require.

                  <form class="form" method="post" action="{{url('/coach/skills/spring')}}" role="form">
                    {{csrf_field()}}
                    <fieldset>
                      <legend>Basic Running</legend>
                      <input type="hidden" name="team_id" value="{{$team->id}}"/>
                      <div class="form-group">
                        <div class="checkbox">
                          <label><input class="basic-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][basic_running][round_off]">Round Off</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="basic-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][basic_running][backhand_spring]">Backhand Spring</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="basic-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][basic_running][front_walk_over]">Front Walk Over</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="basic-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][basic_running][round_off_2_backhand_spring]">Round Off, 2 Backhand Spring</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="basic-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][basic_running][round_off_3_backhand_spring]">Round Off, 3 Backhand Spring</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="basic-running-spring" type="checkbox" id="checkAllRunning">Check All</label>
                        </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>Basic Standing</legend>

                      <div class="form-group">
                        <div class="checkbox">
                          <label><input class="basic-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][basic_standing][bhs]">Basic BackHand Spring</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="basic-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][basic_standing][2_bhs]">2 Basic BackHand Spring</label>
                        </div>
                        <div class="checkbox">
                        <label><input class="basic-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][basic_standing][3_bhs]">3 or More Basic BackHand Spring</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="basic-standing-spring" type="checkbox" id="checkAllStanding">Check All</label>
                        </div>
                    </fieldset>
                    <fieldset>
                      <legend>Advanced Running</legend>
                      <div class="form-group">
                        <div class="checkbox">
                          <label><input class="advanced-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_running][round_off_tuck]">Round Off, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_running][round_off_bhs_tuck]">Round Off, Backhand Spring, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_running][round_off_bhs_tuck_2_bhs]">Round Off, Backhand Spring, Tuck, 2x Backhand Spring, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_running][round_off_bhs_whip]">Round Off, Backhand Spring, Whip</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_running][round_off_bhs_layout]">Round Off, Backhand Spring, Layout</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_running][round_off_bhs_whip_2_bhs_layout]">Round Off, Backhand Spring, Whip, 2x Backhand Spring, Layout</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-running-spring" type="checkbox" id="checkAllStanding">Check All</label>
                        </div>
                    </fieldset>
                    <fieldset>
                      <legend>Advanced Standing</legend>
                      <div class="form-group">
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_standing][3_bhs_tuck]">3x Backhand Spring, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_standing][2_bhs_tuck]">2x Backhand Spring, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_standing][bhs_tuck]">Backhand Spring, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_standing][tuck]">Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_standing][3_bhs_layout]">3x Backhand Spring, Layout</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_standing][2_bhs_layout]">2x Backhand Spring, Layout</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_standing][bhs_layout]">Backhand Spring, Layout</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_standing][tuck_2_bhs_layout]">Tuck, 2x Backhand Spring, Layout</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox" id="checkAllAdvanceStanding">Check All</label>
                        </div>
                    </fieldset>
                    <fieldset>
                      <legend>Elite Running</legend>
                      <div class="form-group">
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox" name="skills[spring_floor_tumbling][elite_running][round_off_bhs_half]">Round Off, Backhand Spring, Half</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_running][round_off_bhs_full]">Round Off, Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_running][round_off_bhs_double]">Round Off, Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_running][front_tuck_round_off_bhs_full]">Front Tuck, Round Off, Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_running][round_off_bhs_full_half]">Round Off, Backhand Spring, Full and a 1/2</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_running][round_off_arabian_round_off_bhs_full]">Round Off, Arabian, Round Off, Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_running][round_off_bhs_whip_full]">Round Off, Backhand Spring, Whip, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_running][round_off_bhs_whip_double]">Round Off, Backhand Spring, Whip, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_running][round_off_arabian_round_off_bhs_double]">Round Off, Arabian, Round Off, Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_running][front_tuck_round_off_bhs_double]">Front Tuck, Round Off, Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox" id="checkAllEliteRunning">Check All</label>
                        </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>Elite Standing</legend>
                      <div class="form-group">
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][3_bhs_full]">3 Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox" name="skills[spring_floor_tumbling][elite_standing][2_bhs_full]">2 Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][bhs_full]">Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][full]">Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][3_bhs_double]">3 Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][2_bhs_double]">2 Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][bhs_double]">Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][full_2_bhs_full]">Full, 2 Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][full_3_bhs_double]">Full, 3 Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][3_bhs_whip_full]">3 Backhand Spring, Whip, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][3_bhs_whip_double]">3 Backhand Spring, Whip, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox" id="checkAllEliteStanding">Check All</label>
                        </div>
                      </div>
                    </fieldset>
                    <button class="btn btn-success"> Save Spring Floor Skills</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">Hard Floor Tumbling</div>
                <div class="panel-body">
                  <form class="form" method="post" action="{{url('/coach/skills/hard')}}" role="form">
                    <input type="hidden" name="team_id" value="{{$team->id}}"/>
                    {{csrf_field()}}
                    <fieldset>
                      <legend>Basic Running</legend>

                      <div class="form-group">
                        <div class="checkbox">
                          <label><input class="basic-running-spring" type="checkbox"  name="skills[hard_floor_tumbling][basic_running][round_off]">Round Off</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="basic-running-spring" type="checkbox"  name="skills[hard_floor_tumbling][basic_running][round_off_backhand_spring]">Backhand Spring</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="basic-running-spring" type="checkbox"  name="skills[hard_floor_tumbling][basic_running][front_walk_over]">Front Walk Over</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="basic-running-spring" type="checkbox"  name="skills[hard_floor_tumbling][basic_running][round_off_2_backhand_spring]">Round Off, 2 Backhand Spring</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="basic-running-spring" type="checkbox"  name="skills[hard_floor_tumbling][basic_running][round_off_3_backhand_spring]">Round Off, 3 Backhand Spring</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="basic-running-spring" type="checkbox" id="checkAllRunning">Check All</label>
                        </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>Basic Standing</legend>

                      <div class="form-group">
                        <div class="checkbox">
                          <label><input class="basic-standing-spring" type="checkbox"  name="skills[hard_floor_tumbling][basic_standing][bhs]">Basic Handstand</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="basic-standing-spring" type="checkbox"  name="skills[hard_floor_tumbling][basic_standing][2_bhs]">2 Basic Handstand</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="basic-standing-spring" type="checkbox"  name="skills[hard_floor_tumbling][basic_standing][3_bhs]">3 or More Basic Handstand</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="basic-standing-spring" type="checkbox" id="checkAllStanding">Check All</label>
                        </div>
                    </fieldset>
                    <fieldset>
                      <legend>Advanced Running</legend>
                      <div class="form-group">
                        <div class="checkbox">
                          <label><input class="advanced-running-spring" type="checkbox"  name="skills[hard_floor_tumbling][advanced_running][round_off_tuck]">Round Off, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-running-spring" type="checkbox"  name="skills[hard_floor_tumbling][advanced_running][round_off_bhs_tuck]">Round Off, Backhand Spring, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-running-spring" type="checkbox"  name="skills[hard_floor_tumbling][advanced_running][round_off_bhs_tuck_2_bhs_tuck]">Round Off, Backhand Spring, Tuck, 2x Backhand Spring, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-running-spring" type="checkbox"  name="skills[hard_floor_tumbling][advanced_running][round_off_bhs_whip]">Round Off, Backhand Spring, Whip</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-running-spring" type="checkbox"  name="skills[hard_floor_tumbling][advanced_running][round_off_bhs_layout]">Round Off, Backhand Spring, Layout</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-running-spring" type="checkbox"  name="skills[hard_floor_tumbling][advanced_running][round_off_bhs_whip_2_bhs_layout]">Round Off, Backhand Spring, Whip, 2x Backhand Spring, Layout</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-running-spring" type="checkbox" id="checkAllStanding">Check All</label>
                        </div>
                    </fieldset>
                    <fieldset>
                      <legend>Advanced Standing</legend>
                      <div class="form-group">
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="skills[hard_floor_tumbling][advanced_standing][3_bhs_tuck]">3x Backhand Spring, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="skills[hard_floor_tumbling][advanced_standing][2_bhs_tuck]">2x Backhand Spring, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="skills[hard_floor_tumbling][advanced_standing][bhs_tuck]">Backhand Spring, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="skills[hard_floor_tumbling][advanced_standing][tuck]">Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="skills[hard_floor_tumbling][advanced_standing][3_bhs_layout]">3x Backhand Spring, Layout</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="skills[hard_floor_tumbling][advanced_standing][2_bhs_layout]">2x Backhand Spring, Layout</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="skills[hard_floor_tumbling][advanced_standing][bhs_layout]">Backhand Spring, Layout</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="skills[hard_floor_tumbling][advanced_standing][tuck_2_bhs_layout]">Tuck, 2x Backhand Spring, Layout</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox" id="checkAllAdvanceStanding">Check All</label>
                        </div>
                    </fieldset>
                    <fieldset>
                      <legend>Elite Running</legend>
                      <div class="form-group">
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox" name="skills[hard_floor_tumbling][elite_running][round_off_bhs_half]">Round Off, Backhand Spring, Half</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="skills[hard_floor_tumbling][elite_running][round_off_bhs_full]">Round Off, Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="skills[hard_floor_tumbling][elite_running][round_off_bhs_double]">Round Off, Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="skills[hard_floor_tumbling][elite_running][front_tuck_round_off_bhs_full]">Front Tuck, Round Off, Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="skills[hard_floor_tumbling][elite_running][round_off_bhs_full_and_half]">Round Off, Backhand Spring, Full and a 1/2</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="skills[hard_floor_tumbling][elite_running][round_off_arabian_round_off_bhs_full]">Round Off, Arabian, Round Off, Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="skills[hard_floor_tumbling][elite_running][round_off_bhs_whip_full]">Round Off, Backhand Spring, Whip, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="skills[hard_floor_tumbling][elite_running][round_off_bhs_whip_double]">Round Off, Backhand Spring, Whip, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="skills[hard_floor_tumbling][elite_running][round_off_arabian_round_off_bhs_double]">Round Off, Arabian, Round Off, Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="skills[hard_floor_tumbling][elite_running][front_tuck_round_off_bhs_double]">Front Tuck, Round Off, Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox" id="checkAllEliteRunning">Check All</label>
                        </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>Elite Standing</legend>
                      <div class="form-group">
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][3_bhs_full]">3 Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox" name="skills[hard_floor_tumbling][elite_standing][2_bhs_full]">2 Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][bhs_full]">Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][full]">Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][3_bhs_double]">3 Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][2_bhs_double]">2 Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][bhs_double]">Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][full_2_bhs_full]">Full, 2 Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][full_3_bhs_double]">Full, 3 Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][3_bhs_whip_full]">3 Backhand Spring, Whip, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][3_bhs_whip_double]">3 Backhand Spring, Whip, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox" id="checkAllEliteStanding">Check All</label>
                        </div>
                      </div>
                    </fieldset>
                    <button class="btn btn-success"> Save Hard Floor Skills</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">Group Stunting</div>
                <div class="panel-body ">
                  <form class="form" method="post" action="{{url('/coach/skills/group')}}" role="form">
                    <input type="hidden" name="team_id" value="{{$team->id}}"/>
                    <fieldset>
                      <legend>Basic</legend>
                      <h2>Group Stunting </h2>
                      <hr>
                      <div class="checkbox">
                        <label><input class="basic-group-stunting" type="checkbox"  name="skills['group_stunting']['basic']['group_stunting']['show_and_go']">Show and Go</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="basic-group-stunting" type="checkbox"  name="skills['group_stunting']['basic']['group_stunting']['extension']">Extension</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="basic-group-stunting" type="checkbox"  name="skills['group_stunting']['basic']['group_stunting']['power_press']">Power Press</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="basic-group-stunting" type="checkbox"  name="skills['group_stunting']['basic']['group_stunting']['prep_level_liberty']">Prep Level Liberty</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="basic-group-stunting" type="checkbox"  name="skills['group_stunting']['basic']['group_stunting']['extended_level_liberty']">Extended Level Liberty</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="basic-group-stunting" type="checkbox">Mark All</label>
                      </div>
                      <h2>Stationary Group Stunting</h2>
                      <hr>
                      <div class="checkbox">
                        <label><input class="basic-stationary-group-stunting" type="checkbox"  name="skills['group_stunting']['basic']['stationary_group_stuntung']['prep_level_half_twist_up']">Prep Level 1/2 Twist Up</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="basic-stationary-group-stunting" type="checkbox"  name="skills['group_stunting']['basic']['stationary_group_stuntung']['extended_level_half_twist_up']">Extended Level 1/2 Twist Up</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="basic-stationary-group-stunting" type="checkbox">Mark All</label>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>Advanced</legend>
                      <h2>Prep Level</h2>
                      <hr>

                      <div class="checkbox">
                        <label><input class="advance-prep-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['prep_level']['switch_up']">Switch Up</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="advance-prep-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['prep_level']['full_up']">Full Up (Semi Releasing)</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="advance-prep-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['prep_level']['one_half_full_up']">1 & 1/2 Full Ups (Semi Releasing)</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="advance-prep-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['prep_level']['double_ups']">Double Ups</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="advance-prep-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['prep_level']['full_twisting_switch_up']">Full Twisting Switch Up (Releasing)</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="basic-stationary-group-stunting" type="checkbox">Mark All</label>
                      </div>
                      <h2>Extended Level</h2>
                      <hr>

                      <div class="checkbox">
                        <label><input class="advance-prep-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['switch_up']">Switch Up</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="advance-prep-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['full_up']">Full Up (Semi Releasing)</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="advance-prep-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['one_half_full_up']">1 & 1/2 Full Ups (Semi Releasing)</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="advance-prep-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['double_ups']">Double Ups</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="advance-extended-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['full_twisting_switch_up']">Full Twisting Switch Up (Releasing)</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="basic-stationary-group-stunting" type="checkbox">Mark All</label>
                      </div>
                      <h2>Full Down Dismount</h2>
                      <hr>

                      <div class="checkbox">
                        <label><input class="advance-full-down-dismount-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['switch_up']">Switch Up</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="advance-prep-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['full_up']">Full Up (Semi Releasing)</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="advance-prep-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['one_half_full_up']">1 & 1/2 Full Ups (Semi Releasing)</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="advance-prep-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['double_ups']">Double Ups</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="advance-extended-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['full_twisting_switch_up']">Full Twisting Switch Up (Releasing)</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="basic-stationary-group-stunting" type="checkbox">Mark All</label>
                      </div>
                      <h2>Double Down Dismount</h2>
                      <hr>

                      <div class="checkbox">
                        <label><input class="advance-prep-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['switch_up']">Switch Up</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="advance-prep-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['full_up']">Full Up (Semi Releasing)</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="advance-prep-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['one_half_full_up']">1 & 1/2 Full Ups (Semi Releasing)</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="advance-prep-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['double_ups']">Double Ups</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="advance-extended-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['full_twisting_switch_up']">Full Twisting Switch Up (Releasing)</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="basic-stationary-group-stunting" type="checkbox">Mark All</label>
                      </div>
                      <h2>Other Dismount</h2>
                      <hr>

                      <div class="checkbox">
                        <label><input class="advance-prep-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['switch_up']">Switch Up</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="advance-prep-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['full_up']">Full Up (Semi Releasing)</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="advance-prep-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['one_half_full_up']">1 & 1/2 Full Ups (Semi Releasing)</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="advance-prep-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['double_ups']">Double Ups</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="advance-extended-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['full_twisting_switch_up']">Full Twisting Switch Up (Releasing)</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="basic-stationary-group-stunting" type="checkbox">Mark All</label>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>Elite</legend>
                      <h2>2 Based Stunts</h2>
                      <div class="checkbox">
                        <label><input class="elite-2-based-stunts-group-stunting" type="checkbox"  name="skills['group_stunting']['elite']['2_based_stunts']['prep']">Prep</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-2-based-stunts-group-stunting" type="checkbox"  name="skills['group_stunting']['elite']['2_based_stunts']['extension']">Extension</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-2-based-stunts-group-stunting" type="checkbox"  name="skills['group_stunting']['elite']['2_based_stunts']['extended_level_liberty']">Extended Level Liberty</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-2-based-stunts-group-stunting" type="checkbox"  name="skills['group_stunting']['elite']['2_based_stunts']['one_handed_cupie_or_awesome']">One Handed Cupie or Awesome</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-2-based-stunts-group-stunting" type="checkbox"  name="skills['group_stunting']['elite']['2_based_stunts']['full_up']">Full Up<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-2-based-stunts-group-stunting" type="checkbox"  name="skills['group_stunting']['elite']['2_based_stunts']['low_to_high_full_around']">Low to High Full Around (Semi Releasing)</label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-2-based-stunts-group-stunting" type="checkbox"  name="skills['group_stunting']['elite']['2_based_stunts']['high_to_high_full_around']">High to High Full Around (Semi Releasing)<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-2-based-stunts-group-stunting" type="checkbox">Mark All</label>
                      </div>
                      <h2>Flipping Group Stunting</h2>
                      <hr>
                      <div class="checkbox">
                        <label><input class="elite-flipping-stunts-group-stunting" type="checkbox"  name="skills['group_stunting']['elite']['flipping_group_stunting']['rewind']">Rewind<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-flipping-stunts-group-stunting" type="checkbox"  name="skills['group_stunting']['elite']['flipping_group_stunting']['platform']">Platform<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-flipping-stunts-group-stunting" type="checkbox"  name="skills['group_stunting']['elite']['flipping_group_stunting']['liberty']">Liberty<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-flipping-stunts-group-stunting" type="checkbox"  name="skills['group_stunting']['elite']['flipping_group_stunting']['stretch']">Stretch<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-flipping-stunts-group-stunting" type="checkbox">Mark All</label>
                      </div>
                      <h2>Front Hand Spring Up</h2>
                      <hr>
                      <div class="checkbox">
                        <label><input class="elite-front-hand-spring-up-group-stunting" type="checkbox"  name="skills['group_stunting']['elite']['front_hand_spring_up']['platform']">Platform<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-front-hand-spring-up-group-stunting" type="checkbox"  name="skills['group_stunting']['elite']['front_hand_spring_up']['liberty']">Liberty<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-front-hand-spring-up-group-stunting" type="checkbox"  name="skills['group_stunting']['elite']['front_hand_spring_up']['stretch']">Stretch<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-front-hand-spring-up-group-stunting" type="checkbox"  name="skills['group_stunting']['elite']['front_hand_spring_up']['1_and_half_twisting_full_up']">1 & 1/2 Twisting Full Up<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-front-hand-spring-up-group-stunting" type="checkbox">Mark All</label>
                      </div>
                      <h2>Back Hand Spring Up</h2>
                      <hr>
                      <div class="checkbox">
                        <label><input class="elite-back-hand-spring-up-group-stunting" type="checkbox"  name="skills['group_stunting']['elite']['back_hand_spring_up']['platform']">Platform<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-back-hand-spring-up-group-stunting" type="checkbox"  name="skills['group_stunting']['elite']['back_hand_spring_up']['liberty']">Liberty<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-back-hand-spring-up-group-stunting" type="checkbox"  name="skills['group_stunting']['elite']['back_hand_spring_up']['stretch']">Stretch<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-back-hand-spring-up-group-stunting" type="checkbox"  name="skills['group_stunting']['elite']['back_hand_spring_up']['full_up']">Full Up<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-back-hand-spring-up-group-stunting" type="checkbox">Mark All</label>
                      </div>
                      <h2>Hand in Hand</h2>
                      <hr>
                      <div class="checkbox">
                        <label><input class="elite-hand-in-hand-group-stunting" type="checkbox"  name="skills['group_stunting']['elite']['hand_in_hand']['platform']">Platform<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-hand-in-hand-group-stunting" type="checkbox"  name="skills['group_stunting']['elite']['hand_in_hand']['liberty']">Liberty<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-hand-in-hand-group-stunting" type="checkbox"  name="skills['group_stunting']['elite']['hand_in_hand']['stretch']">Stretch<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-hand-in-hand-group-stunting" type="checkbox"  name="skills['group_stunting']['elite']['hand_in_hand']['full_up']">Full Up<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-hand-in-hand-group-stunting" type="checkbox">Mark All</label>
                      </div>
                      <h2>Extended Hand in Hand</h2>
                      <hr>
                      <div class="checkbox">
                        <label><input class="elite-extended-hand-in-hand-group-stunting" type="checkbox"  name="skills['group_stunting']['elite']['extended_hand_in_hand']['platform']">Platform<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-extended-hand-in-hand-group-stunting" type="checkbox"  name="skills['group_stunting']['elite']['extended_hand_in_hand']['liberty']">Liberty<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-extended-hand-in-hand-group-stunting" type="checkbox"  name="skills['group_stunting']['elite']['extended_hand_in_hand']['stretch']">Stretch<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-extended-hand-in-hand-group-stunting" type="checkbox"  name="skills['group_stunting']['elite']['extended_hand_in_hand']['full_up']">Full Up<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-extended-hand-in-hand-group-stunting" type="checkbox">Mark All</label>
                      </div>
                    </fieldset>
                    <button type="submit" class="btn btn-success">Save Group Stunting Skills</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">Coed Stunting</div>
                <div class="panel-body ">
                  <form class="form" method="post" action="{{url('/coach/skills/coed')}}"role="form">
                    <input type="hidden" name="team_id" value="{{$team->id}}"/>
                    <fieldset>
                      <legend>Basic</legend>
                      <h2>Walk-in</h2>
                      <hr>
                      <div class="checkbox">
                        <label><input class="basic-walk-in-coed-stunting" type="checkbox"  name="skills['coed_stunting']['basic']['walk_in']['hands']">Hands<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="basic-walk-in-coed-stunting" type="checkbox"  name="skills['coed_stunting']['basic']['walk_in']['extension']">Extension<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="basic-walk-in-coed-stunting" type="checkbox"  name="skills['coed_stunting']['basic']['walk_in']['liberty']">Liberty<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="basic-walk-in-coed-stunting" type="checkbox"  name="skills['coed_stunting']['basic']['walk_in']['stretch']">Stretch<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="basic-walk-in-coed-stunting" type="checkbox">Mark All</label>
                      </div>
                      <h2>Toss</h2>
                      <hr>
                      <div class="checkbox">
                        <label><input class="basic-toss-coed-stunting" type="checkbox"  name="skills['coed_stunting']['basic']['toss']['hands']">Hands<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="basic-toss-coed-stunting" type="checkbox"  name="skills['coed_stunting']['basic']['toss']['extension']">Extension<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="basic-toss-coed-stunting" type="checkbox"  name="skills['coed_stunting']['basic']['toss']['liberty']">Liberty<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="basic-toss-coed-stunting" type="checkbox"  name="skills['coed_stunting']['basic']['toss']['stretch']">Stretch<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="basic-toss-coed-stunting" type="checkbox">Mark All</label>
                      </div>
                      <h2>From Hands</h2>
                      <hr>
                      <div class="checkbox">
                        <label><input class="basic-from-hands-coed-stunting" type="checkbox"  name="skills['coed_stunting']['basic']['from_hands']['hands']">Hands<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="basic-from-hands-coed-stunting" type="checkbox"  name="skills['coed_stunting']['basic']['from_hands']['extension']">Extension<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="basic-from-hands-coed-stunting" type="checkbox"  name="skills['coed_stunting']['basic']['from_hands']['liberty']">Liberty<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="basic-from-hands-coed-stunting" type="checkbox"  name="skills['coed_stunting']['basic']['from_hands']['stretch']">Stretch<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="basic-from-hands-coed-stunting" type="checkbox">Mark All</label>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>Advanced</legend>
                      <h2>One Arm</h2>
                      <hr>
                      <div class="checkbox">
                        <label><input class="advanced-one-arm-coed-stunting" type="checkbox"  name="skills['coed_stunting']['advanced']['one_arm']['hands']">Hands<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="advanced-one-arm-coed-stunting" type="checkbox"  name="skills['coed_stunting']['advanced']['one_arm']['extension']">Extension<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="advanced-one-arm-coed-stunting" type="checkbox"  name="skills['coed_stunting']['advanced']['one_arm']['liberty']">Liberty<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="advanced-one-arm-coed-stunting" type="checkbox"  name="skills['coed_stunting']['advanced']['one_arm']['stretch']">Stretch<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="advanced-one-arm-coed-stunting" type="checkbox">Mark All</label>
                      </div>
                      <h2>Full Up</h2>
                      <hr>
                      <div class="checkbox">
                        <label><input class="advanced-full-up-coed-stunting" type="checkbox"  name="skills['coed_stunting']['advanced']['full_up']['hands']">Hands<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="basic-toss-coed-stunting" type="checkbox"  name="skills['coed_stunting']['advanced']['full_up']['extension']">Extension<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="basic-toss-coed-stunting" type="checkbox"  name="skills['coed_stunting']['advanced']['full_up']['liberty']">Liberty<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="basic-toss-coed-stunting" type="checkbox"  name="skills['coed_stunting']['advanced']['full_up']['stretch']">Stretch<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="basic-toss-coed-stunting" type="checkbox">Mark All</label>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>Dismounts</legend>
                      <h2>Full Down</h2>
                      <div class="checkbox">
                        <label><input class="dismounts-full-down-stunting" type="checkbox"  name="skills['coed_stunting']['dismounts']['full_down']['prep']">Prep<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="dismounts-full-down-stunting" type="checkbox"  name="skills['coed_stunting']['dismounts']['full_down']['extension']">Extension<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="dismounts-full-down-stunting" type="checkbox"  name="skills['coed_stunting']['dismounts']['full_down']['liberty']">Liberty<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="dismounts-full-down-stunting" type="checkbox"  name="skills['coed_stunting']['dismounts']['full_down']['stretch']">Stretch<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="dismounts-full-down-stunting" type="checkbox"  name="skills['coed_stunting']['dismounts']['full_down']['scorpion']">Scorpion<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="dismounts-full-down-stunting" type="checkbox"  name="skills['coed_stunting']['dismounts']['full_down']['scale']">Scale<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="dismounts-full-down-coed-stunting" type="checkbox">Mark All</label>
                      </div>
                      <h2>Double Down</h2>
                      <div class="checkbox">
                        <label><input class="dismounts-double-down-stunting" type="checkbox"  name="skills['coed_stunting']['dismounts']['double_down']['prep']">Prep<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="dismounts-double-down-stunting" type="checkbox"  name="skills['coed_stunting']['dismounts']['double_down']['extension']">Extension<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="dismounts-double-down-stunting" type="checkbox"  name="skills['coed_stunting']['dismounts']['double_down']['liberty']">Liberty<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="dismounts-double-down-stunting" type="checkbox"  name="skills['coed_stunting']['dismounts']['double_down']['stretch']">Stretch<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="dismounts-double-down-stunting" type="checkbox"  name="skills['coed_stunting']['dismounts']['double_down']['scorpion']">Scorpion<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="dismounts-double-down-stunting" type="checkbox"  name="skills['coed_stunting']['dismounts']['double_down']['scale']">Scale<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="dismounts-double-down-coed-stunting" type="checkbox">Mark All</label>
                      </div>
                      <h2>Other</h2>
                      <div class="checkbox">
                        <label><input class="dismounts-other-stunting" type="checkbox"  name="skills['coed_stunting']['dismounts']['other']['low_to_high_tic_toc']">Low to High Tic Toc<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="dismounts-other-stunting" type="checkbox"  name="skills['coed_stunting']['dismounts']['other']['high_to_high_tic_toc']">High to High Tic Toc<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="dismounts-other-stunting" type="checkbox"  name="skills['coed_stunting']['dismounts']['other']['low_to_high_full_around']">Low to High Full Around<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="dismounts-other-stunting" type="checkbox"  name="skills['coed_stunting']['dismounts']['other']['high_to_high_full_around']">High to High Full Around<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="dismounts-other-stunting" type="checkbox"  name="skills['coed_stunting']['dismounts']['other']['hands_full_around']">Hands Full Around<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="dismounts-other-coed-stunting" type="checkbox">Mark All</label>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>Elite</legend>
                      <h2>Flipping Coed Stunting</h2>
                      <hr>
                      <div class="checkbox">
                        <label><input class="elite-flipping-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['flipping_coed_stunting']['rewind']">Rewind<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-flipping-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['flipping_coed_stunting']['platform']">Platform<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-flipping-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['flipping_coed_stunting']['liberty']">Liberty<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-flipping-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['flipping_coed_stunting']['stretch']">Stretch<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-flipping-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['flipping_coed_stunting']['cupie']">Cupie<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-flipping-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['flipping_coed_stunting']['1_and_half_twisting_full_up']">1 & 1/2 Twisting Full Up<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-flipping-coed-stunting" type="checkbox">Mark All</label>
                      </div>
                      <h2>Front Hand Spring Up</h2>
                      <div class="checkbox">
                        <label><input class="elite-front-hand-spring-up-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['front_hand_spring_up']['platform']">Platform<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-front-hand-spring-up-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['front_hand_spring_up']['liberty']">Liberty<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-front-hand-spring-up-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['front_hand_spring_up']['stretch']">Stretch<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-front-hand-spring-up-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['front_hand_spring_up']['cupie']">Cupie<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-front-hand-spring-up-coed-stunting" type="checkbox">Mark All</label>
                      </div>
                      <hr>
                      <h2>Back Hand Spring Up</h2>
                      <hr>
                      <div class="checkbox">
                        <label><input class="elite-back-hand-spring-up-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['back_hand_spring_up']['platform']">Platform<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-back-hand-spring-up-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['back_hand_spring_up']['liberty']">Liberty<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-back-hand-spring-up-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['back_hand_spring_up']['stretch']">Stretch<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-back-hand-spring-up-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['back_hand_spring_up']['cupie']">Cupie<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-back-hand-spring-up-coed-stunting" type="checkbox">Mark All</label>
                      </div>
                      <h2>Hand in Hand</h2>
                      <hr>
                      <div class="checkbox">
                        <label><input class="elite-hand-hand-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['hand_in_hand']['platform']">Platform<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-hand-hand-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['hand_in_hand']['liberty']">Liberty<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-hand-hand-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['hand_in_hand']['stretch']">Stretch<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-hand-hand-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['hand_in_hand']['cupie']">Cupie<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-hand-hand-coed-stunting" type="checkbox">Mark All</label>
                      </div>
                      <h2>Extended Hand in Hand</h2>
                      <hr>
                      <div class="checkbox">
                        <label><input class="elite-extended-hand-hand-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['extended_hand_in_hand']['platform']">Platform<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-extended-hand-hand-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['extended_hand_in_hand']['liberty']">Liberty<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-extended-hand-hand-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['extended_hand_in_hand']['stretch']">Stretch<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-extended-hand-hand-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['extended_hand_in_hand']['cupie']">Cupie<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-extended-hand-hand-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['extended_hand_in_hand']['full_up']">Full Up<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-extended-hand-hand-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['extended_hand_in_hand']['inverted_cupie']">Inverted Cupie<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-extended-hand-hand-coed-stunting" type="checkbox">Mark All</label>
                      </div>
                      <h2>Other</h2>
                      <hr>
                      <div class="checkbox">
                        <label><input class="elite-other-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['other']['double_up']">Double Up<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-other-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['other']['one_arm']">One Arm<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-other-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['other']['double_cupie']">Double Cupie<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-other-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['other']['cartwheel_up']">Cartwheel Up<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-other-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['other']['side_sumy_up']">Side Sumy Up<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-other-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['other']['front_ariel_up']">Front Ariel Up<label>
                      </div>
                      <div class="checkbox">
                        <label><input class="elite-other-coed-stunting" type="checkbox">Mark All</label>
                      </div>
                    </fieldset>
                    <button class="btn btn-success" type="submit">Save Coed Stunting</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
