@extends('layouts.app')

@section('content')
  {{--{{ dd($team) }}--}}
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$team->team_name}}</div>

                <div class="panel-body">

                Name: {{$team->team_name}}
                <br>
                Coach: {{$team->coach_name}}
                <br>
                Mascot: {{$team->mascot}}
                <br>
                Description: {{$team->description}}
                <br>
                Team Type: {{$team->team_type}}
                <br>
                Team Responsibilities: {{$team->team_responsibilities}}
                <br>
                Number Members: {{$team->number_members}}
                <br>
                Average Room: {{$team->average_room}}
                <br>
                Wins UCA: {{$team->wins_uca}}
                <br>
                Wins NCA: {{$team->wins_nca}}
                <br>
                Wins Worlds: {{$team->wins_worlds}}
                <br>
                Other Wins: {{$team->wins_other}}
                <br>
                Financial Requirements: {{$team->financial_requirements}}
                <br>
                Information is the same for all teams: {{($team->same_information ? $team->same_information : 'No')}}
                <br>
                Tuition Cost In State: {{$team->tuition_cost_in}}
                <br>
                Tuition Cost Out Of State: {{$team->tuition_cost_out}}
                <br>
                Brief description of cheer program: {{$team->description_program}}
                <br>
{{--                Your skillset percentage : {{$skillPercentage * 100}}%--}}
                {{--@if($canMessage)--}}
                <div class="text-right">
                  <a href="{{url('/send-message/'.$team->id)}}" class="btn btn-info">Contact Head Coach</a>
                </div>
                {{--@else--}}
                {{--<div class="text-right">--}}
                  {{--<a href="#" data-toggle="tooltip" title="You don't have enough skillset percentage to contact the head coach of this team." class="btn btn-info">Contact Head Coach</a>--}}
                {{--</div>--}}
                {{--@endif--}}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading"><a data-toggle="collapse" href="#spring">Spring Floor Tumbling -  <h4 class="d-inline-block ml-2"> @if (isset($spring_tumbling_percent)) {{ $spring_tumbling_percent }}@else 0 @endif %</h4></a></div>
          <div id="spring" class="panel-collapse collapse">
            <div class="panel-body">
              <fieldset>
                <legend>Basic Running</legend>

                <div class="form-group">
                  <div class="checkbox">
                    <label><input class="basic-running-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][basic_running][round_off]" @if(isset($skills['spring_floor_tumbling_skills']['basic_running']) && !empty($skills['spring_floor_tumbling_skills']['basic_running']) && in_array('round_off', $skills['spring_floor_tumbling_skills']['basic_running']))checked @endif>Round Off</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="basic-running-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][basic_running][backhand_spring]" @if(isset($skills['spring_floor_tumbling_skills']['basic_running']) && !empty($skills['spring_floor_tumbling_skills']['basic_running']) && in_array('backhand_spring', $skills['spring_floor_tumbling_skills']['basic_running']))checked @endif>Backhand Spring</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="basic-running-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][basic_running][front_walk_over]" @if(isset($skills['spring_floor_tumbling_skills']['basic_running']) && !empty($skills['spring_floor_tumbling_skills']['basic_running']) && in_array('front_walk_over', $skills['spring_floor_tumbling_skills']['basic_running']))checked @endif>Front Walk Over</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="basic-running-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][basic_running][round_off_2_backhand_spring]" @if(isset($skills['spring_floor_tumbling_skills']['basic_running']) && !empty($skills['spring_floor_tumbling_skills']['basic_running']) && in_array('round_off_2_backhand_spring', $skills['spring_floor_tumbling_skills']['basic_running']))checked @endif>Round Off, 2 Backhand Spring</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="basic-running-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][basic_running][round_off_3_backhand_spring]" @if(isset($skills['spring_floor_tumbling_skills']['basic_running']) && !empty($skills['spring_floor_tumbling_skills']['basic_running']) && in_array('round_off_3_backhand_spring', $skills['spring_floor_tumbling_skills']['basic_running']))checked @endif>Round Off, 3 Backhand Spring</label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>Basic Standing</legend>

                <div class="form-group">
                  <div class="checkbox">
                    <label><input class="basic-standing-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][basic_standing][bhs]"  @if(isset($skills['spring_floor_tumbling_skills']['basic_standing']) && !empty($skills['spring_floor_tumbling_skills']['basic_standing']) && in_array('bhs', $skills['spring_floor_tumbling_skills']['basic_standing']))checked @endif>Basic BackHand Spring</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="basic-standing-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][basic_standing][2_bhs]" @if(isset($skills['spring_floor_tumbling_skills']['basic_standing']) && !empty($skills['spring_floor_tumbling_skills']['basic_standing']) && in_array('2_bhs', $skills['spring_floor_tumbling_skills']['basic_standing']))checked @endif>2 Basic BackHand Spring</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="basic-standing-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][basic_standing][3_bhs]" @if(isset($skills['spring_floor_tumbling_skills']['basic_standing']) && !empty($skills['spring_floor_tumbling_skills']['basic_standing']) && in_array('3_bhs', $skills['spring_floor_tumbling_skills']['basic_standing']))checked @endif>3 or More Basic BackHand Spring</label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>Advanced Running</legend>
                <div class="form-group">
                  <div class="checkbox">
                    <label><input class="advanced-running-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][advanced_running][round_off_tuck]" @if(isset($skills['spring_floor_tumbling_skills']['advanced_running']) && !empty($skills['spring_floor_tumbling_skills']['advanced_running']) && in_array('round_off_tuck', $skills['spring_floor_tumbling_skills']['advanced_running']))checked @endif>Round Off, Tuck</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="advanced-running-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][advanced_running][round_off_bhs_tuck]" @if(isset($skills['spring_floor_tumbling_skills']['advanced_running']) && !empty($skills['spring_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_tuck', $skills['spring_floor_tumbling_skills']['advanced_running']))checked @endif>Round Off, Backhand Spring, Tuck</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="advanced-running-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][advanced_running][round_off_bhs_tuck_2_bhs]" @if(isset($skills['spring_floor_tumbling_skills']['advanced_running']) && !empty($skills['spring_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_tuck_2_bhs', $skills['spring_floor_tumbling_skills']['advanced_running']))checked @endif>Round Off, Backhand Spring, Tuck, 2x Backhand Spring, Tuck</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="advanced-running-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][advanced_running][round_off_bhs_whip]" @if(isset($skills['spring_floor_tumbling_skills']['advanced_running']) && !empty($skills['spring_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_whip', $skills['spring_floor_tumbling_skills']['advanced_running']))checked @endif>Round Off, Backhand Spring, Whip</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="advanced-running-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][advanced_running][round_off_bhs_layout]" @if(isset($skills['spring_floor_tumbling_skills']['advanced_running']) && !empty($skills['spring_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_layout', $skills['spring_floor_tumbling_skills']['advanced_running']))checked @endif>Round Off, Backhand Spring, Layout</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="advanced-running-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][advanced_running][round_off_bhs_whip_2_bhs_layout]" @if(isset($skills['spring_floor_tumbling_skills']['advanced_running']) && !empty($skills['spring_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_whip_2_bhs_layout', $skills['spring_floor_tumbling_skills']['advanced_running']))checked @endif>Round Off, Backhand Spring, Whip, 2x Backhand Spring, Layout</label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>Advanced Standing</legend>
                <div class="form-group">
                  <div class="checkbox">
                    <label><input class="advanced-standing-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][advanced_standing][3_bhs_tuck]" @if(isset($skills['spring_floor_tumbling_skills']['advanced_standing']) && !empty($skills['spring_floor_tumbling_skills']['advanced_standing']) && in_array('3_bhs_tuck', $skills['spring_floor_tumbling_skills']['advanced_standing']))checked @endif>3x Backhand Spring, Tuck</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="advanced-standing-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][advanced_standing][2_bhs_tuck]" @if(isset($skills['spring_floor_tumbling_skills']['advanced_standing']) && !empty($skills['spring_floor_tumbling_skills']['advanced_standing']) && in_array('2_bhs_tuck', $skills['spring_floor_tumbling_skills']['advanced_standing']))checked @endif>2x Backhand Spring, Tuck</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="advanced-standing-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][advanced_standing][bhs_tuck]" @if(isset($skills['spring_floor_tumbling_skills']['advanced_standing']) && !empty($skills['spring_floor_tumbling_skills']['advanced_standing']) && in_array('bhs_tuck', $skills['spring_floor_tumbling_skills']['advanced_standing']))checked @endif>Backhand Spring, Tuck</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="advanced-standing-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][advanced_standing][tuck]" @if(isset($skills['spring_floor_tumbling_skills']['advanced_standing']) && !empty($skills['spring_floor_tumbling_skills']['advanced_standing']) && in_array('tuck', $skills['spring_floor_tumbling_skills']['advanced_standing']))checked @endif>Tuck</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="advanced-standing-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][advanced_standing][3_bhs_layout]" @if(isset($skills['spring_floor_tumbling_skills']['advanced_standing']) && !empty($skills['spring_floor_tumbling_skills']['advanced_standing']) && in_array('3_bhs_layout', $skills['spring_floor_tumbling_skills']['advanced_standing']))checked @endif>3x Backhand Spring, Layout</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="advanced-standing-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][advanced_standing][2_bhs_layout]" @if(isset($skills['spring_floor_tumbling_skills']['advanced_standing']) && !empty($skills['spring_floor_tumbling_skills']['advanced_standing']) && in_array('2_bhs_layout', $skills['spring_floor_tumbling_skills']['advanced_standing']))checked @endif>2x Backhand Spring, Layout</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="advanced-standing-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][advanced_standing][bhs_layout]" @if(isset($skills['spring_floor_tumbling_skills']['advanced_standing']) && !empty($skills['spring_floor_tumbling_skills']['advanced_standing']) && in_array('bhs_layout', $skills['spring_floor_tumbling_skills']['advanced_standing']))checked @endif>Backhand Spring, Layout</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="advanced-standing-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][advanced_standing][tuck_2_bhs_layout]" @if(isset($skills['spring_floor_tumbling_skills']['advanced_standing']) && !empty($skills['spring_floor_tumbling_skills']['advanced_standing']) && in_array('tuck_2_bhs_layout', $skills['spring_floor_tumbling_skills']['advanced_standing']))checked @endif>Tuck, 2x Backhand Spring, Layout</label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>Elite Running</legend>
                <div class="form-group">
                  <div class="checkbox">
                    <label><input class="elite-running-spring" type="checkbox" disabled name="skills[spring_floor_tumbling_skills][elite_running][round_off_bhs_half]" @if(isset($skills['spring_floor_tumbling_skills']['elite_running']) && !empty($skills['spring_floor_tumbling_skills']['elite_running']) && in_array('round_off_bhs_half', $skills['spring_floor_tumbling_skills']['elite_running']))checked @endif>Round Off, Backhand Spring, Half</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-running-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][elite_running][round_off_bhs_full]" @if(isset($skills['spring_floor_tumbling_skills']['elite_running']) && !empty($skills['spring_floor_tumbling_skills']['elite_running']) && in_array('round_off_bhs_full', $skills['spring_floor_tumbling_skills']['elite_running']))checked @endif>Round Off, Backhand Spring, Full</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-running-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][elite_running][round_off_bhs_double]" @if(isset($skills['spring_floor_tumbling_skills']['elite_running']) && !empty($skills['spring_floor_tumbling_skills']['elite_running']) && in_array('round_off_bhs_double', $skills['spring_floor_tumbling_skills']['elite_running']))checked @endif>Round Off, Backhand Spring, Double</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-running-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][elite_running][front_tuck_round_off_bhs_full]" @if(isset($skills['spring_floor_tumbling_skills']['elite_running']) && !empty($skills['spring_floor_tumbling_skills']['elite_running']) && in_array('front_tuck_round_off_bhs_full', $skills['spring_floor_tumbling_skills']['elite_running']))checked @endif>Front Tuck, Round Off, Backhand Spring, Full</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-running-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][elite_running][round_off_bhs_full_half]" @if(isset($skills['spring_floor_tumbling_skills']['elite_running']) && !empty($skills['spring_floor_tumbling_skills']['elite_running']) && in_array('round_off_bhs_full_half', $skills['spring_floor_tumbling_skills']['elite_running']))checked @endif>Round Off, Backhand Spring, Full and a 1/2</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-running-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][elite_running][round_off_arabian_round_off_bhs_full]" @if(isset($skills['spring_floor_tumbling_skills']['elite_running']) && !empty($skills['spring_floor_tumbling_skills']['elite_running']) && in_array('round_off_arabian_round_off_bhs_full', $skills['spring_floor_tumbling_skills']['elite_running']))checked @endif>Round Off, Arabian, Round Off, Backhand Spring, Full</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-running-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][elite_running][round_off_bhs_whip_full]" @if(isset($skills['spring_floor_tumbling_skills']['elite_running']) && !empty($skills['spring_floor_tumbling_skills']['elite_running']) && in_array('round_off_bhs_whip_full', $skills['spring_floor_tumbling_skills']['elite_running']))checked @endif>Round Off, Backhand Spring, Whip, Full</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-running-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][elite_running][round_off_bhs_whip_double]" @if(isset($skills['spring_floor_tumbling_skills']['elite_running']) && !empty($skills['spring_floor_tumbling_skills']['elite_running']) && in_array('round_off_bhs_whip_double', $skills['spring_floor_tumbling_skills']['elite_running']))checked @endif>Round Off, Backhand Spring, Whip, Double</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-running-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][elite_running][round_off_arabian_round_off_bhs_double]" @if(isset($skills['spring_floor_tumbling_skills']['elite_running']) && !empty($skills['spring_floor_tumbling_skills']['elite_running']) && in_array('round_off_arabian_round_off_bhs_double', $skills['spring_floor_tumbling_skills']['elite_running']))checked @endif>Round Off, Arabian, Round Off, Backhand Spring, Double</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-running-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][elite_running][front_tuck_round_off_bhs_double]" @if(isset($skills['spring_floor_tumbling_skills']['elite_running']) && !empty($skills['spring_floor_tumbling_skills']['elite_running']) && in_array('front_tuck_round_off_bhs_double', $skills['spring_floor_tumbling_skills']['elite_running']))checked @endif>Front Tuck, Round Off, Backhand Spring, Double</label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>Elite Standing</legend>
                <div class="form-group">
                  <div class="checkbox">
                    <label><input class="elite-standing-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][elite_standing][3_bhs_full]" @if(isset($skills['spring_floor_tumbling_skills']['elite_standing']) && !empty($skills['spring_floor_tumbling_skills']['elite_standing']) && in_array('3_bhs_full', $skills['spring_floor_tumbling_skills']['elite_standing']))checked @endif>3 Backhand Spring, Full</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-standing-spring" type="checkbox" disabled name="skills[spring_floor_tumbling_skills][elite_standing][2_bhs_full]" @if(isset($skills['spring_floor_tumbling_skills']['elite_standing']) && !empty($skills['spring_floor_tumbling_skills']['elite_standing']) && in_array('2_bhs_full', $skills['spring_floor_tumbling_skills']['elite_standing']))checked @endif>2 Backhand Spring, Full</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-standing-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][elite_standing][bhs_full]" @if(isset($skills['spring_floor_tumbling_skills']['elite_standing']) && !empty($skills['spring_floor_tumbling_skills']['elite_standing']) && in_array('bhs_full', $skills['spring_floor_tumbling_skills']['elite_standing']))checked @endif>Backhand Spring, Full</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-standing-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][elite_standing][full]" @if(isset($skills['spring_floor_tumbling_skills']['elite_standing']) && !empty($skills['spring_floor_tumbling_skills']['elite_standing']) && in_array('full', $skills['spring_floor_tumbling_skills']['elite_standing']))checked @endif>Full</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-standing-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][elite_standing][3_bhs_double]" @if(isset($skills['spring_floor_tumbling_skills']['elite_standing']) && !empty($skills['spring_floor_tumbling_skills']['elite_standing']) && in_array('3_bhs_double', $skills['spring_floor_tumbling_skills']['elite_standing']))checked @endif>3 Backhand Spring, Double</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-standing-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][elite_standing][2_bhs_double]" @if(isset($skills['spring_floor_tumbling_skills']['elite_standing']) && !empty($skills['spring_floor_tumbling_skills']['elite_standing']) && in_array('2_bhs_double', $skills['spring_floor_tumbling_skills']['elite_standing']))checked @endif>2 Backhand Spring, Double</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-standing-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][elite_standing][bhs_double]" @if(isset($skills['spring_floor_tumbling_skills']['elite_standing']) && !empty($skills['spring_floor_tumbling_skills']['elite_standing']) && in_array('bhs_double', $skills['spring_floor_tumbling_skills']['elite_standing']))checked @endif>Backhand Spring, Double</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-standing-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][elite_standing][full_2_bhs_full]" @if(isset($skills['spring_floor_tumbling_skills']['elite_standing']) && !empty($skills['spring_floor_tumbling_skills']['elite_standing']) && in_array('full_2_bhs_full', $skills['spring_floor_tumbling_skills']['elite_standing']))checked @endif>Full, 2 Backhand Spring, Full</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-standing-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][elite_standing][full_3_bhs_double]" @if(isset($skills['spring_floor_tumbling_skills']['elite_standing']) && !empty($skills['spring_floor_tumbling_skills']['elite_standing']) && in_array('full_3_bhs_double', $skills['spring_floor_tumbling_skills']['elite_standing']))checked @endif>Full, 3 Backhand Spring, Double</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-standing-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][elite_standing][3_bhs_whip_full]" @if(isset($skills['spring_floor_tumbling_skills']['elite_standing']) && !empty($skills['spring_floor_tumbling_skills']['elite_standing']) && in_array('3_bhs_whip_full', $skills['spring_floor_tumbling_skills']['elite_standing']))checked @endif>3 Backhand Spring, Whip, Full</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-standing-spring" type="checkbox" disabled  name="skills[spring_floor_tumbling_skills][elite_standing][3_bhs_whip_double]" @if(isset($skills['spring_floor_tumbling_skills']['elite_standing']) && !empty($skills['spring_floor_tumbling_skills']['elite_standing']) && in_array('3_bhs_whip_double', $skills['spring_floor_tumbling_skills']['elite_standing']))checked @endif>3 Backhand Spring, Whip, Double</label>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading"><a data-toggle="collapse" href="#hard">Hard Floor Tumbling - <h4 class="d-inline-block ml-2"> @if (isset($hard_tumbling_percent)) {{ $hard_tumbling_percent }}@else 0 @endif %</h4></a></div>
          <div id="hard" class="panel-collapse collapse">
            <div class="panel-body">

              <fieldset>
                <legend>Basic Running</legend>

                <div class="form-group">
                  <div class="checkbox">
                    <label><input class="basic-running-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][basic_running][round_off]" @if(isset($skills['hard_floor_tumbling_skills']['basic_running']) && !empty($skills['hard_floor_tumbling_skills']['basic_running']) && in_array('round_off', $skills['hard_floor_tumbling_skills']['basic_running']))checked @endif>Round Off</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="basic-running-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][basic_running][round_off_backhand_spring]" @if(isset($skills['hard_floor_tumbling_skills']['basic_running']) && !empty($skills['hard_floor_tumbling_skills']['basic_running']) && in_array('round_off_backhand_spring', $skills['hard_floor_tumbling_skills']['basic_running']))checked @endif>Backhand Spring</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="basic-running-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][basic_running][front_walk_over]" @if(isset($skills['hard_floor_tumbling_skills']['basic_running']) && !empty($skills['hard_floor_tumbling_skills']['basic_running']) && in_array('front_walk_over', $skills['hard_floor_tumbling_skills']['basic_running']))checked @endif>Front Walk Over</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="basic-running-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][basic_running][round_off_2_backhand_spring]" @if(isset($skills['hard_floor_tumbling_skills']['basic_running']) && !empty($skills['hard_floor_tumbling_skills']['basic_running']) && in_array('round_off_2_backhand_spring', $skills['hard_floor_tumbling_skills']['basic_running']))checked @endif>Round Off, 2 Backhand Spring</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="basic-running-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][basic_running][round_off_3_backhand_spring]" @if(isset($skills['hard_floor_tumbling_skills']['basic_running']) && !empty($skills['hard_floor_tumbling_skills']['basic_running']) && in_array('round_off_3_backhand_spring', $skills['hard_floor_tumbling_skills']['basic_running']))checked @endif>Round Off, 3 Backhand Spring</label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>Basic Standing</legend>

                <div class="form-group">
                  <div class="checkbox">
                    <label><input class="basic-standing-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][basic_standing][bhs]" @if(isset($skills['hard_floor_tumbling_skills']['basic_standing']) && !empty($skills['hard_floor_tumbling_skills']['basic_standing']) && in_array('bhs', $skills['hard_floor_tumbling_skills']['basic_standing']))checked @endif>Basic Handstand</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="basic-standing-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][basic_standing][2_bhs]" @if(isset($skills['hard_floor_tumbling_skills']['basic_standing']) && !empty($skills['hard_floor_tumbling_skills']['basic_standing']) && in_array('2_bhs', $skills['hard_floor_tumbling_skills']['basic_standing']))checked @endif>2 Basic Handstand</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="basic-standing-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][basic_standing][3_bhs]" @if(isset($skills['hard_floor_tumbling_skills']['basic_standing']) && !empty($skills['hard_floor_tumbling_skills']['basic_standing']) && in_array('3_bhs', $skills['hard_floor_tumbling_skills']['basic_standing']))checked @endif>3 or More Basic Handstand</label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>Advanced Running</legend>
                <div class="form-group">
                  <div class="checkbox">
                    <label><input class="advanced-running-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][advanced_running][round_off_tuck]" @if(isset($skills['hard_floor_tumbling_skills']['advanced_running']) && !empty($skills['hard_floor_tumbling_skills']['advanced_running']) && in_array('round_off_tuck', $skills['hard_floor_tumbling_skills']['advanced_running']))checked @endif>Round Off, Tuck</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="advanced-running-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][advanced_running][round_off_bhs_tuck]" @if(isset($skills['hard_floor_tumbling_skills']['advanced_running']) && !empty($skills['hard_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_tuck', $skills['hard_floor_tumbling_skills']['advanced_running']))checked @endif>Round Off, Backhand Spring, Tuck</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="advanced-running-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][advanced_running][round_off_bhs_tuck_2_bhs_tuck]" @if(isset($skills['hard_floor_tumbling_skills']['advanced_running']) && !empty($skills['hard_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_tuck_2_bhs', $skills['hard_floor_tumbling_skills']['advanced_running']))checked @endif>Round Off, Backhand Spring, Tuck, 2x Backhand Spring, Tuck</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="advanced-running-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][advanced_running][round_off_bhs_whip]" @if(isset($skills['hard_floor_tumbling_skills']['advanced_running']) && !empty($skills['hard_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_whip', $skills['hard_floor_tumbling_skills']['advanced_running']))checked @endif>Round Off, Backhand Spring, Whip</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="advanced-running-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][advanced_running][round_off_bhs_layout]" @if(isset($skills['hard_floor_tumbling_skills']['advanced_running']) && !empty($skills['hard_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_layout', $skills['hard_floor_tumbling_skills']['advanced_running']))checked @endif>Round Off, Backhand Spring, Layout</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="advanced-running-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][advanced_running][round_off_bhs_whip_2_bhs_layout]" @if(isset($skills['hard_floor_tumbling_skills']['advanced_running']) && !empty($skills['hard_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_whip_2_bhs_layout', $skills['hard_floor_tumbling_skills']['advanced_running']))checked @endif>Round Off, Backhand Spring, Whip, 2x Backhand Spring, Layout</label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>Advanced Standing</legend>
                <div class="form-group">
                  <div class="checkbox">
                    <label><input class="advanced-standing-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][advanced_standing][3_bhs_tuck]" @if(isset($skills['hard_floor_tumbling_skills']['advanced_standing']) && !empty($skills['hard_floor_tumbling_skills']['advanced_standing']) && in_array('3_bhs_tuck', $skills['hard_floor_tumbling_skills']['advanced_standing']))checked @endif>3x Backhand Spring, Tuck</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="advanced-standing-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][advanced_standing][2_bhs_tuck]" @if(isset($skills['hard_floor_tumbling_skills']['advanced_standing']) && !empty($skills['hard_floor_tumbling_skills']['advanced_standing']) && in_array('2_bhs_tuck', $skills['hard_floor_tumbling_skills']['advanced_standing']))checked @endif>2x Backhand Spring, Tuck</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="advanced-standing-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][advanced_standing][bhs_tuck]" @if(isset($skills['hard_floor_tumbling_skills']['advanced_standing']) && !empty($skills['hard_floor_tumbling_skills']['advanced_standing']) && in_array('bhs_tuck', $skills['hard_floor_tumbling_skills']['advanced_standing']))checked @endif>Backhand Spring, Tuck</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="advanced-standing-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][advanced_standing][tuck]" @if(isset($skills['hard_floor_tumbling_skills']['advanced_standing']) && !empty($skills['hard_floor_tumbling_skills']['advanced_standing']) && in_array('tuck', $skills['hard_floor_tumbling_skills']['advanced_standing']))checked @endif>Tuck</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="advanced-standing-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][advanced_standing][3_bhs_layout]" @if(isset($skills['hard_floor_tumbling_skills']['advanced_standing']) && !empty($skills['hard_floor_tumbling_skills']['advanced_standing']) && in_array('3_bhs_layout', $skills['hard_floor_tumbling_skills']['advanced_standing']))checked @endif>3x Backhand Spring, Layout</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="advanced-standing-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][advanced_standing][2_bhs_layout]" @if(isset($skills['hard_floor_tumbling_skills']['advanced_standing']) && !empty($skills['hard_floor_tumbling_skills']['advanced_standing']) && in_array('2_bhs_layout', $skills['hard_floor_tumbling_skills']['advanced_standing']))checked @endif>2x Backhand Spring, Layout</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="advanced-standing-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][advanced_standing][bhs_layout]" @if(isset($skills['hard_floor_tumbling_skills']['advanced_standing']) && !empty($skills['hard_floor_tumbling_skills']['advanced_standing']) && in_array('bhs_layout', $skills['hard_floor_tumbling_skills']['advanced_standing']))checked @endif>Backhand Spring, Layout</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="advanced-standing-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][advanced_standing][tuck_2_bhs_layout]" @if(isset($skills['hard_floor_tumbling_skills']['advanced_standing']) && !empty($skills['hard_floor_tumbling_skills']['advanced_standing']) && in_array('tuck_2_bhs_layout', $skills['hard_floor_tumbling_skills']['advanced_standing']))checked @endif>Tuck, 2x Backhand Spring, Layout</label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>Elite Running</legend>
                <div class="form-group">
                  <div class="checkbox">
                    <label><input class="elite-running-hard" type="checkbox" disabled name="skills[hard_floor_tumbling_skills][elite_running][round_off_bhs_half]" @if(isset($skills['hard_floor_tumbling_skills']['elite_running']) && !empty($skills['hard_floor_tumbling_skills']['elite_running']) && in_array('round_off_bhs_half', $skills['hard_floor_tumbling_skills']['elite_running']))checked @endif>Round Off, Backhand Spring, Half</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-running-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][elite_running][round_off_bhs_full]" @if(isset($skills['hard_floor_tumbling_skills']['elite_running']) && !empty($skills['hard_floor_tumbling_skills']['elite_running']) && in_array('round_off_bhs_full', $skills['hard_floor_tumbling_skills']['elite_running']))checked @endif>Round Off, Backhand Spring, Full</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-running-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][elite_running][round_off_bhs_double]" @if(isset($skills['hard_floor_tumbling_skills']['elite_running']) && !empty($skills['hard_floor_tumbling_skills']['elite_running']) && in_array('round_off_bhs_double', $skills['hard_floor_tumbling_skills']['elite_running']))checked @endif>Round Off, Backhand Spring, Double</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-running-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][elite_running][front_tuck_round_off_bhs_full]" @if(isset($skills['hard_floor_tumbling_skills']['elite_running']) && !empty($skills['hard_floor_tumbling_skills']['elite_running']) && in_array('front_tuck_round_off_bhs_full', $skills['hard_floor_tumbling_skills']['elite_running']))checked @endif>Front Tuck, Round Off, Backhand Spring, Full</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-running-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][elite_running][round_off_bhs_full_and_half]" @if(isset($skills['hard_floor_tumbling_skills']['elite_running']) && !empty($skills['hard_floor_tumbling_skills']['elite_running']) && in_array('round_off_bhs_full_half', $skills['hard_floor_tumbling_skills']['elite_running']))checked @endif>Round Off, Backhand Spring, Full and a 1/2</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-running-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][elite_running][round_off_arabian_round_off_bhs_full]" @if(isset($skills['hard_floor_tumbling_skills']['elite_running']) && !empty($skills['hard_floor_tumbling_skills']['elite_running']) && in_array('round_off_arabian_round_off_bhs_full', $skills['hard_floor_tumbling_skills']['elite_running']))checked @endif>Round Off, Arabian, Round Off, Backhand Spring, Full</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-running-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][elite_running][round_off_bhs_whip_full]" @if(isset($skills['hard_floor_tumbling_skills']['elite_running']) && !empty($skills['hard_floor_tumbling_skills']['elite_running']) && in_array('round_off_bhs_whip_full', $skills['hard_floor_tumbling_skills']['elite_running']))checked @endif>Round Off, Backhand Spring, Whip, Full</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-running-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][elite_running][round_off_bhs_whip_double]" @if(isset($skills['hard_floor_tumbling_skills']['elite_running']) && !empty($skills['hard_floor_tumbling_skills']['elite_running']) && in_array('round_off_bhs_whip_double', $skills['hard_floor_tumbling_skills']['elite_running']))checked @endif>Round Off, Backhand Spring, Whip, Double</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-running-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][elite_running][round_off_arabian_round_off_bhs_double]" @if(isset($skills['hard_floor_tumbling_skills']['elite_running']) && !empty($skills['hard_floor_tumbling_skills']['elite_running']) && in_array('round_off_arabian_round_off_bhs_double', $skills['hard_floor_tumbling_skills']['elite_running']))checked @endif>Round Off, Arabian, Round Off, Backhand Spring, Double</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-running-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][elite_running][front_tuck_round_off_bhs_double]" @if(isset($skills['hard_floor_tumbling_skills']['elite_running']) && !empty($skills['hard_floor_tumbling_skills']['elite_running']) && in_array('front_tuck_round_off_bhs_double', $skills['hard_floor_tumbling_skills']['elite_running']))checked @endif>Front Tuck, Round Off, Backhand Spring, Double</label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>Elite Standing</legend>
                <div class="form-group">
                  <div class="checkbox">
                    <label><input class="elite-standing-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][elite_standing][3_bhs_full]"  @if(isset($skills['hard_floor_tumbling_skills']['elite_standing']) && !empty($skills['hard_floor_tumbling_skills']['elite_standing']) && in_array('3_bhs_full', $skills['hard_floor_tumbling_skills']['elite_standing']))checked @endif>3 Backhand Spring, Full</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-standing-hard" type="checkbox" disabled name="skills[hard_floor_tumbling_skills][elite_standing][2_bhs_full]" @if(isset($skills['hard_floor_tumbling_skills']['elite_standing']) && !empty($skills['hard_floor_tumbling_skills']['elite_standing']) && in_array('2_bhs_full', $skills['hard_floor_tumbling_skills']['elite_standing']))checked @endif>2 Backhand Spring, Full</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-standing-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][elite_standing][bhs_full]" @if(isset($skills['hard_floor_tumbling_skills']['elite_standing']) && !empty($skills['hard_floor_tumbling_skills']['elite_standing']) && in_array('bhs_full', $skills['hard_floor_tumbling_skills']['elite_standing']))checked @endif>Backhand Spring, Full</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-standing-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][elite_standing][full]" @if(isset($skills['hard_floor_tumbling_skills']['elite_standing']) && !empty($skills['hard_floor_tumbling_skills']['elite_standing']) && in_array('full', $skills['hard_floor_tumbling_skills']['elite_standing']))checked @endif>Full</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-standing-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][elite_standing][3_bhs_double]" @if(isset($skills['hard_floor_tumbling_skills']['elite_standing']) && !empty($skills['hard_floor_tumbling_skills']['elite_standing']) && in_array('3_bhs_double', $skills['hard_floor_tumbling_skills']['elite_standing']))checked @endif>3 Backhand Spring, Double</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-standing-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][elite_standing][2_bhs_double]" @if(isset($skills['hard_floor_tumbling_skills']['elite_standing']) && !empty($skills['hard_floor_tumbling_skills']['elite_standing']) && in_array('2_bhs_double', $skills['hard_floor_tumbling_skills']['elite_standing']))checked @endif>2 Backhand Spring, Double</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-standing-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][elite_standing][bhs_double]" @if(isset($skills['hard_floor_tumbling_skills']['elite_standing']) && !empty($skills['hard_floor_tumbling_skills']['elite_standing']) && in_array('bhs_double', $skills['hard_floor_tumbling_skills']['elite_standing']))checked @endif>Backhand Spring, Double</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-standing-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][elite_standing][full_2_bhs_full]" @if(isset($skills['hard_floor_tumbling_skills']['elite_standing']) && !empty($skills['hard_floor_tumbling_skills']['elite_standing']) && in_array('full_2_bhs_full', $skills['hard_floor_tumbling_skills']['elite_standing']))checked @endif>Full, 2 Backhand Spring, Full</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-standing-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][elite_standing][full_3_bhs_double]" @if(isset($skills['hard_floor_tumbling_skills']['elite_standing']) && !empty($skills['hard_floor_tumbling_skills']['elite_standing']) && in_array('full_3_bhs_double', $skills['hard_floor_tumbling_skills']['elite_standing']))checked @endif>Full, 3 Backhand Spring, Double</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-standing-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][elite_standing][3_bhs_whip_full]" @if(isset($skills['hard_floor_tumbling_skills']['elite_standing']) && !empty($skills['hard_floor_tumbling_skills']['elite_standing']) && in_array('3_bhs_whip_full', $skills['hard_floor_tumbling_skills']['elite_standing']))checked @endif>3 Backhand Spring, Whip, Full</label>
                  </div>
                  <div class="checkbox">
                    <label><input class="elite-standing-hard" type="checkbox" disabled  name="skills[hard_floor_tumbling_skills][elite_standing][3_bhs_whip_double]" @if(isset($skills['hard_floor_tumbling_skills']['elite_standing']) && !empty($skills['hard_floor_tumbling_skills']['elite_standing']) && in_array('3_bhs_whip_double', $skills['hard_floor_tumbling_skills']['elite_standing']))checked @endif>3 Backhand Spring, Whip, Double</label>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading"><a data-toggle="collapse" href="#group">Group Stunting - <h4 class="d-inline-block ml-2"> @if (isset($group_stunting_percent)) {{ $group_stunting_percent }}@else 0 @endif %</h4></a></div>
          <div id="group" class="panel-collapse collapse">
            <div class="panel-body ">
              <fieldset>
                <legend>Basic</legend>
                <h2>Group Stunting </h2>
                <hr>
                <div class="checkbox">
                  <label><input class="basic-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][basic][group_stunting][show_and_go]" @if(isset($skills['group_stunting_skills']['basic']['group_stunting']) && !empty($skills['group_stunting_skills']['basic']['group_stunting']) && in_array('show_and_go', $skills['group_stunting_skills']['basic']['group_stunting']))checked @endif>Show and Go</label>
                </div>
                <div class="checkbox">
                  <label><input class="basic-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][basic][group_stunting][extension]" @if(isset($skills['group_stunting_skills']['basic']['group_stunting']) && !empty($skills['group_stunting_skills']['basic']['group_stunting']) && in_array('extension', $skills['group_stunting_skills']['basic']['group_stunting']))checked @endif>Extension</label>
                </div>
                <div class="checkbox">
                  <label><input class="basic-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][basic][group_stunting][power_press]" @if(isset($skills['group_stunting_skills']['basic']['group_stunting']) && !empty($skills['group_stunting_skills']['basic']['group_stunting']) && in_array('power_press', $skills['group_stunting_skills']['basic']['group_stunting']))checked @endif>Power Press</label>
                </div>
                <div class="checkbox">
                  <label><input class="basic-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][basic][group_stunting][prep_level_liberty]" @if(isset($skills['group_stunting_skills']['basic']['group_stunting']) && !empty($skills['group_stunting_skills']['basic']['group_stunting']) && in_array('prep_level_liberty', $skills['group_stunting_skills']['basic']['group_stunting']))checked @endif>Prep Level Liberty</label>
                </div>
                <div class="checkbox">
                  <label><input class="basic-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][basic][group_stunting][extended_level_liberty]" @if(isset($skills['group_stunting_skills']['basic']['group_stunting']) && !empty($skills['group_stunting_skills']['basic']['group_stunting']) && in_array('extended_level_liberty', $skills['group_stunting_skills']['basic']['group_stunting']))checked @endif>Extended Level Liberty</label>
                </div>
                <h2>Stationary Group Stunting</h2>
                <hr>
                <div class="checkbox">
                  <label><input class="basic-stationary-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][basic][stationary_group_stuntung][prep_level_half_twist_up]" @if(isset($skills['group_stunting_skills']['basic']['stationary_group_stunting']) && !empty($skills['group_stunting_skills']['basic']['stationary_group_stunting']) && in_array('prep_level_half_twist_up', $skills['group_stunting_skills']['basic']['stationary_group_stunting']))checked @endif>Prep Level 1/2 Twist Up</label>
                </div>
                <div class="checkbox">
                  <label><input class="basic-stationary-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][basic][stationary_group_stuntung][extended_level_half_twist_up]" @if(isset($skills['group_stunting_skills']['basic']['stationary_group_stunting']) && !empty($skills['group_stunting_skills']['basic']['stationary_group_stunting']) && in_array('extended_level_half_twist_up', $skills['group_stunting_skills']['basic']['stationary_group_stunting']))checked @endif>Extended Level 1/2 Twist Up</label>
                </div>
              </fieldset>
              <fieldset>
                <legend>Advanced</legend>
                <h2>Prep Level</h2>
                <hr>

                <div class="checkbox">
                  <label><input class="advance-prep-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][advance][prep_level][switch_up]" @if(isset($skills['group_stunting_skills']['advance']['prep_level']) && !empty($skills['group_stunting_skills']['advance']['prep_level']) && in_array('switch_up', $skills['group_stunting_skills']['advance']['prep_level']))checked @endif>Switch Up</label>
                </div>
                <div class="checkbox">
                  <label><input class="advance-prep-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][advance][prep_level][full_up]" @if(isset($skills['group_stunting_skills']['advance']['prep_level']) && !empty($skills['group_stunting_skills']['advance']['prep_level']) && in_array('full_up', $skills['group_stunting_skills']['advance']['prep_level']))checked @endif>Full Up (Semi Releasing)</label>
                </div>
                <div class="checkbox">
                  <label><input class="advance-prep-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][advance][prep_level][one_half_full_up]" @if(isset($skills['group_stunting_skills']['advance']['prep_level']) && !empty($skills['group_stunting_skills']['advance']['prep_level']) && in_array('one_half_full_up', $skills['group_stunting_skills']['advance']['prep_level']))checked @endif>1 & 1/2 Full Ups (Semi Releasing)</label>
                </div>
                <div class="checkbox">
                  <label><input class="advance-prep-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][advance][prep_level][double_ups]" @if(isset($skills['group_stunting_skills']['advance']['prep_level']) && !empty($skills['group_stunting_skills']['advance']['prep_level']) && in_array('double_ups', $skills['group_stunting_skills']['advance']['prep_level']))checked @endif>Double Ups</label>
                </div>
                <div class="checkbox">
                  <label><input class="advance-prep-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][advance][prep_level][full_twisting_switch_up]" @if(isset($skills['group_stunting_skills']['advance']['prep_level']) && !empty($skills['group_stunting_skills']['advance']['prep_level']) && in_array('full_twisting_switch_up', $skills['group_stunting_skills']['advance']['prep_level']))checked @endif>Full Twisting Switch Up (Releasing)</label>
                </div>

                <h2>Extended Level</h2>
                <hr>
                <div class="checkbox">
                  <label><input class="advance-extended-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][advance][extended][switch_up]" @if(isset($skills['group_stunting_skills']['advance']['extended']) && !empty($skills['group_stunting_skills']['advance']['extended']) && in_array('switch_up', $skills['group_stunting_skills']['advance']['extended']))checked @endif>Switch Up</label>
                </div>
                <div class="checkbox">
                  <label><input class="advance-extended-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][advance][extended][full_up]" @if(isset($skills['group_stunting_skills']['advance']['extended']) && !empty($skills['group_stunting_skills']['advance']['extended']) && in_array('full_up', $skills['group_stunting_skills']['advance']['extended']))checked @endif>Full Up (Semi Releasing)</label>
                </div>
                <div class="checkbox">
                  <label><input class="advance-extended-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][advance][extended][one_half_full_up]" @if(isset($skills['group_stunting_skills']['advance']['extended']) && !empty($skills['group_stunting_skills']['advance']['extended']) && in_array('one_half_full_up', $skills['group_stunting_skills']['advance']['extended']))checked @endif>1 & 1/2 Full Ups (Semi Releasing)</label>
                </div>
                <div class="checkbox">
                  <label><input class="advance-extended-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][advance][extended][double_ups]" @if(isset($skills['group_stunting_skills']['advance']['extended']) && !empty($skills['group_stunting_skills']['advance']['extended']) && in_array('double_ups', $skills['group_stunting_skills']['advance']['extended']))checked @endif>Double Ups</label>
                </div>
                <div class="checkbox">
                  <label><input class="advance-extended-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][advance][extended][full_twisting_switch_up]" @if(isset($skills['group_stunting_skills']['advance']['extended']) && !empty($skills['group_stunting_skills']['advance']['extended']) && in_array('full_twisting_switch_up', $skills['group_stunting_skills']['advance']['extended']))checked @endif>Full Twisting Switch Up (Releasing)</label>
                </div>

                <h2>Full Down Dismount</h2>
                <hr>
                <div class="checkbox">
                  <label><input class="advance-full-down-dismount-group-stunting" type="checkbox" disabled  name="skills['group_stunting_skills']['advance']['extended']['switch_up']" @if(isset($skills['group_stunting_skills']['advance']['full_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['full_down_dismount']) && in_array('prep', $skills['group_stunting_skills']['advance']['full_down_dismount']))checked @endif>Prep</label>
                </div>
                <div class="checkbox">
                  <label><input class="advance-full-down-dismount-group-stunting" type="checkbox" disabled  name="skills['group_stunting_skills']['advance']['extended']['full_up']" @if(isset($skills['group_stunting_skills']['advance']['full_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['full_down_dismount']) && in_array('extension', $skills['group_stunting_skills']['advance']['full_down_dismount']))checked @endif>Extension</label>
                </div>
                <div class="checkbox">
                  <label><input class="advance-full-down-dismount-group-stunting" type="checkbox" disabled  name="skills['group_stunting_skills']['advance']['extended']['one_half_full_up']" @if(isset($skills['group_stunting_skills']['advance']['full_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['full_down_dismount']) && in_array('liberty', $skills['group_stunting_skills']['advance']['full_down_dismount']))checked @endif>Liberty</label>
                </div>
                <div class="checkbox">
                  <label><input class="advance-full-down-dismount-group-stunting" type="checkbox" disabled  name="skills['group_stunting_skills']['advance']['extended']['double_ups']" @if(isset($skills['group_stunting_skills']['advance']['full_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['full_down_dismount']) && in_array('stretch', $skills['group_stunting_skills']['advance']['full_down_dismount']))checked @endif>Stretch</label>
                </div>
                <div class="checkbox">
                  <label><input class="advance-full-down-dismount-group-stunting" type="checkbox" disabled  name="skills['group_stunting_skills']['advance']['extended']['full_twisting_switch_up']" @if(isset($skills['group_stunting_skills']['advance']['full_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['full_down_dismount']) && in_array('scorpion', $skills['group_stunting_skills']['advance']['full_down_dismount']))checked @endif>Scorpion</label>
                </div>
                <div class="checkbox">
                  <label><input class="advance-full-down-dismount-group-stunting" type="checkbox" disabled  name="skills['group_stunting_skills']['advance']['extended']['full_twisting_switch_up']" @if(isset($skills['group_stunting_skills']['advance']['full_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['full_down_dismount']) && in_array('scale', $skills['group_stunting_skills']['advance']['full_down_dismount']))checked @endif>Scale</label>
                </div>

                <h2>Double Down Dismount</h2>
                <hr>
                <div class="checkbox">
                  <label><input class="advance-full-down-dismount-group-stunting" type="checkbox" disabled  name="skills['group_stunting_skills']['advance']['extended']['switch_up']" @if(isset($skills['group_stunting_skills']['advance']['double_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['double_down_dismount']) && in_array('prep', $skills['group_stunting_skills']['advance']['double_down_dismount']))checked @endif>Prep</label>
                </div>
                <div class="checkbox">
                  <label><input class="advance-full-down-dismount-group-stunting" type="checkbox" disabled  name="skills['group_stunting_skills']['advance']['extended']['full_up']" @if(isset($skills['group_stunting_skills']['advance']['double_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['double_down_dismount']) && in_array('extension', $skills['group_stunting_skills']['advance']['double_down_dismount']))checked @endif>Extension</label>
                </div>
                <div class="checkbox">
                  <label><input class="advance-full-down-dismount-group-stunting" type="checkbox" disabled  name="skills['group_stunting_skills']['advance']['extended']['one_half_full_up']" @if(isset($skills['group_stunting_skills']['advance']['double_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['double_down_dismount']) && in_array('liberty', $skills['group_stunting_skills']['advance']['double_down_dismount']))checked @endif>Liberty</label>
                </div>
                <div class="checkbox">
                  <label><input class="advance-full-down-dismount-group-stunting" type="checkbox" disabled  name="skills['group_stunting_skills']['advance']['extended']['double_ups']" @if(isset($skills['group_stunting_skills']['advance']['double_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['double_down_dismount']) && in_array('stretch', $skills['group_stunting_skills']['advance']['double_down_dismount']))checked @endif>Stretch</label>
                </div>
                <div class="checkbox">
                  <label><input class="advance-full-down-dismount-group-stunting" type="checkbox" disabled  name="skills['group_stunting_skills']['advance']['extended']['full_twisting_switch_up']" @if(isset($skills['group_stunting_skills']['advance']['double_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['double_down_dismount']) && in_array('scorpion', $skills['group_stunting_skills']['advance']['double_down_dismount']))checked @endif>Scorpion</label>
                </div>
                <div class="checkbox">
                  <label><input class="advance-full-down-dismount-group-stunting" type="checkbox" disabled  name="skills['group_stunting_skills']['advance']['extended']['full_twisting_switch_up']" @if(isset($skills['group_stunting_skills']['advance']['double_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['double_down_dismount']) && in_array('scale', $skills['group_stunting_skills']['advance']['double_down_dismount']))checked @endif>Scale</label>
                </div>

                <h2>Other Dismount</h2>
                <hr>
                <div class="checkbox">
                  <label><input class="other-dismount-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][advance][extended][switch_up]" @if(isset($skills['group_stunting_skills']['advance']['other_dismount']) && !empty($skills['group_stunting_skills']['advance']['other_dismount']) && in_array('switch_up', $skills['group_stunting_skills']['advance']['other_dismount']))checked @endif>Switch Up</label>
                </div>
                <div class="checkbox">
                  <label><input class="other-dismount-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][advance][extended][full_up]" @if(isset($skills['group_stunting_skills']['advance']['other_dismount']) && !empty($skills['group_stunting_skills']['advance']['other_dismount']) && in_array('full_up', $skills['group_stunting_skills']['advance']['other_dismount']))checked @endif>Full Up (Semi Releasing)</label>
                </div>
                <div class="checkbox">
                  <label><input class="other-dismount-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][advance][extended][one_half_full_up]" @if(isset($skills['group_stunting_skills']['advance']['other_dismount']) && !empty($skills['group_stunting_skills']['advance']['other_dismount']) && in_array('one_half_full_up', $skills['group_stunting_skills']['advance']['other_dismount']))checked @endif>1 & 1/2 Full Ups (Semi Releasing)</label>
                </div>
                <div class="checkbox">
                  <label><input class="other-dismount-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][advance][extended][double_ups]" @if(isset($skills['group_stunting_skills']['advance']['other_dismount']) && !empty($skills['group_stunting_skills']['advance']['other_dismount']) && in_array('double_ups', $skills['group_stunting_skills']['advance']['other_dismount']))checked @endif>Double Ups</label>
                </div>
                <div class="checkbox">
                  <label><input class="other-dismount-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][advance][extended][full_twisting_switch_up]" @if(isset($skills['group_stunting_skills']['advance']['other_dismount']) && !empty($skills['group_stunting_skills']['advance']['other_dismount']) && in_array('full_twisting_switch_up', $skills['group_stunting_skills']['advance']['other_dismount']))checked @endif>Full Twisting Switch Up (Releasing)</label>
                </div>
              </fieldset>
              <fieldset>
                <legend>Elite</legend>
                <h2>2 Based Stunts</h2>
                <div class="checkbox">
                  <label><input class="elite-2-based-stunts-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][elite][2_based_stunts][prep]" @if(isset($skills['group_stunting_skills']['elite']['2_based_stunts']) && !empty($skills['group_stunting_skills']['elite']['2_based_stunts']) && in_array('prep', $skills['group_stunting_skills']['elite']['2_based_stunts']))checked @endif>Prep</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-2-based-stunts-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][elite][2_based_stunts][extension]" @if(isset($skills['group_stunting_skills']['elite']['2_based_stunts']) && !empty($skills['group_stunting_skills']['elite']['2_based_stunts']) && in_array('extension', $skills['group_stunting_skills']['elite']['2_based_stunts']))checked @endif>Extension</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-2-based-stunts-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][elite][2_based_stunts][extended_level_liberty]" @if(isset($skills['group_stunting_skills']['elite']['2_based_stunts']) && !empty($skills['group_stunting_skills']['elite']['2_based_stunts']) && in_array('extended_level_liberty', $skills['group_stunting_skills']['elite']['2_based_stunts']))checked @endif>Extended Level Liberty</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-2-based-stunts-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][elite][2_based_stunts][one_handed_cupie_or_awesome]" @if(isset($skills['group_stunting_skills']['elite']['2_based_stunts']) && !empty($skills['group_stunting_skills']['elite']['2_based_stunts']) && in_array('one_handed_cupie_or_awesome', $skills['group_stunting_skills']['elite']['2_based_stunts']))checked @endif>One Handed Cupie or Awesome</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-2-based-stunts-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][elite][2_based_stunts][full_up]" @if(isset($skills['group_stunting_skills']['elite']['2_based_stunts']) && !empty($skills['group_stunting_skills']['elite']['2_based_stunts']) && in_array('full_up', $skills['group_stunting_skills']['elite']['2_based_stunts']))checked @endif>Full Up</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-2-based-stunts-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][elite][2_based_stunts][low_to_high_full_around]" @if(isset($skills['group_stunting_skills']['elite']['2_based_stunts']) && !empty($skills['group_stunting_skills']['elite']['2_based_stunts']) && in_array('low_to_high_full_around', $skills['group_stunting_skills']['elite']['2_based_stunts']))checked @endif>Low to High Full Around (Semi Releasing)</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-2-based-stunts-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][elite][2_based_stunts][high_to_high_full_around]" @if(isset($skills['group_stunting_skills']['elite']['2_based_stunts']) && !empty($skills['group_stunting_skills']['elite']['2_based_stunts']) && in_array('high_to_high_full_around', $skills['group_stunting_skills']['elite']['2_based_stunts']))checked @endif>High to High Full Around (Semi Releasing)</label>
                </div>
                <h2>Flipping Group Stunting</h2>
                <hr>
                <div class="checkbox">
                  <label><input class="elite-flipping-stunts-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][elite][flipping_group_stunting][rewind]" @if(isset($skills['group_stunting_skills']['elite']['flipping_group_stunting']) && !empty($skills['group_stunting_skills']['elite']['flipping_group_stunting']) && in_array('rewind', $skills['group_stunting_skills']['elite']['flipping_group_stunting']))checked @endif>Rewind</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-flipping-stunts-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][elite][flipping_group_stunting][platform]" @if(isset($skills['group_stunting_skills']['elite']['flipping_group_stunting']) && !empty($skills['group_stunting_skills']['elite']['flipping_group_stunting']) && in_array('platform', $skills['group_stunting_skills']['elite']['flipping_group_stunting']))checked @endif>Platform</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-flipping-stunts-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][elite][flipping_group_stunting][liberty]" @if(isset($skills['group_stunting_skills']['elite']['flipping_group_stunting']) && !empty($skills['group_stunting_skills']['elite']['flipping_group_stunting']) && in_array('liberty', $skills['group_stunting_skills']['elite']['flipping_group_stunting']))checked @endif>Liberty</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-flipping-stunts-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][elite][flipping_group_stunting][stretch]" @if(isset($skills['group_stunting_skills']['elite']['flipping_group_stunting']) && !empty($skills['group_stunting_skills']['elite']['flipping_group_stunting']) && in_array('stretch', $skills['group_stunting_skills']['elite']['flipping_group_stunting']))checked @endif>Stretch</label>
                </div>
                <h2>Front Hand Spring Up</h2>
                <hr>
                <div class="checkbox">
                  <label><input class="elite-front-hand-spring-up-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][elite][front_hand_spring_up][platform]" @if(isset($skills['group_stunting_skills']['elite']['front_hand_spring_up']) && !empty($skills['group_stunting_skills']['elite']['front_hand_spring_up']) && in_array('platform', $skills['group_stunting_skills']['elite']['front_hand_spring_up']))checked @endif>Platform</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-front-hand-spring-up-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][elite][front_hand_spring_up][liberty]" @if(isset($skills['group_stunting_skills']['elite']['front_hand_spring_up']) && !empty($skills['group_stunting_skills']['elite']['front_hand_spring_up']) && in_array('liberty', $skills['group_stunting_skills']['elite']['front_hand_spring_up']))checked @endif>Liberty</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-front-hand-spring-up-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][elite][front_hand_spring_up][stretch]" @if(isset($skills['group_stunting_skills']['elite']['front_hand_spring_up']) && !empty($skills['group_stunting_skills']['elite']['front_hand_spring_up']) && in_array('stretch', $skills['group_stunting_skills']['elite']['front_hand_spring_up']))checked @endif>Stretch</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-front-hand-spring-up-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][elite][front_hand_spring_up][1_and_half_twisting_full_up]" @if(isset($skills['group_stunting_skills']['elite']['front_hand_spring_up']) && !empty($skills['group_stunting_skills']['elite']['front_hand_spring_up']) && in_array('1_and_half_twisting_full_up', $skills['group_stunting_skills']['elite']['front_hand_spring_up']))checked @endif>1 & 1/2 Twisting Full Up</label>
                </div>
                <h2>Back Hand Spring Up</h2>
                <hr>
                <div class="checkbox">
                  <label><input class="elite-front-hand-spring-up-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][elite][front_hand_spring_up][platform]" @if(isset($skills['group_stunting_skills']['elite']['back_hand_spring_up']) && !empty($skills['group_stunting_skills']['elite']['back_hand_spring_up']) && in_array('platform', $skills['group_stunting_skills']['elite']['back_hand_spring_up']))checked @endif>Platform</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-front-hand-spring-up-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][elite][back_hand_spring_up][liberty]" @if(isset($skills['group_stunting_skills']['elite']['back_hand_spring_up']) && !empty($skills['group_stunting_skills']['elite']['back_hand_spring_up']) && in_array('liberty', $skills['group_stunting_skills']['elite']['back_hand_spring_up']))checked @endif>Liberty</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-front-hand-spring-up-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][elite][back_hand_spring_up][stretch]" @if(isset($skills['group_stunting_skills']['elite']['back_hand_spring_up']) && !empty($skills['group_stunting_skills']['elite']['back_hand_spring_up']) && in_array('stretch', $skills['group_stunting_skills']['elite']['back_hand_spring_up']))checked @endif>Stretch</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-front-hand-spring-up-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][elite][back_hand_spring_up][1_and_half_twisting_full_up]" @if(isset($skills['group_stunting_skills']['elite']['back_hand_spring_up']) && !empty($skills['group_stunting_skills']['elite']['back_hand_spring_up']) && in_array('full_up', $skills['group_stunting_skills']['elite']['back_hand_spring_up']))checked @endif>Full Up</label>
                </div>
                <h2>Hand in Hand</h2>
                <hr>
                <div class="checkbox">
                  <label><input class="elite-front-hand-spring-up-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][elite][front_hand_spring_up][platform]" @if(isset($skills['group_stunting_skills']['elite']['hand_in_hand']) && !empty($skills['group_stunting_skills']['elite']['hand_in_hand']) && in_array('platform', $skills['group_stunting_skills']['elite']['hand_in_hand']))checked @endif>Platform</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-front-hand-spring-up-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][elite][hand_in_hand][liberty]" @if(isset($skills['group_stunting_skills']['elite']['hand_in_hand']) && !empty($skills['group_stunting_skills']['elite']['hand_in_hand']) && in_array('liberty', $skills['group_stunting_skills']['elite']['hand_in_hand']))checked @endif>Liberty</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-front-hand-spring-up-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][elite][hand_in_hand][stretch]" @if(isset($skills['group_stunting_skills']['elite']['hand_in_hand']) && !empty($skills['group_stunting_skills']['elite']['hand_in_hand']) && in_array('stretch', $skills['group_stunting_skills']['elite']['hand_in_hand']))checked @endif>Stretch</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-front-hand-spring-up-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][elite][hand_in_hand][1_and_half_twisting_full_up]" @if(isset($skills['group_stunting_skills']['elite']['hand_in_hand']) && !empty($skills['group_stunting_skills']['elite']['hand_in_hand']) && in_array('full_up', $skills['group_stunting_skills']['elite']['hand_in_hand']))checked @endif>Full Up</label>
                </div>
                <h2>Extended Hand in Hand</h2>
                <hr>
                <div class="checkbox">
                  <label><input class="elite-front-hand-spring-up-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][elite][extended_hand_in_hand][platform]" @if(isset($skills['group_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['group_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('platform', $skills['group_stunting_skills']['elite']['extended_hand_in_hand']))checked @endif>Platform</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-front-hand-spring-up-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][elite][extended_hand_in_hand][liberty]" @if(isset($skills['group_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['group_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('liberty', $skills['group_stunting_skills']['elite']['extended_hand_in_hand']))checked @endif>Liberty</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-front-hand-spring-up-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][elite][extended_hand_in_hand][stretch]" @if(isset($skills['group_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['group_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('stretch', $skills['group_stunting_skills']['elite']['extended_hand_in_hand']))checked @endif>Stretch</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-front-hand-spring-up-group-stunting" type="checkbox" disabled  name="skills[group_stunting_skills][elite][extended_hand_in_hand][1_and_half_twisting_full_up]" @if(isset($skills['group_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['group_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('full_up', $skills['group_stunting_skills']['elite']['extended_hand_in_hand']))checked @endif>Full Up</label>
                </div>
              </fieldset>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading"><a data-toggle="collapse" href="#coed">Coed Stunting - <h4 class="d-inline-block ml-2"> @if (isset($coed_stunting_percent)) {{ $coed_stunting_percent }}@else 0 @endif %</h4></a></div>
          <div id="coed" class="panel-collapse collapse">
            <div class="panel-body ">

              <fieldset>
                <legend>Basic</legend>
                <h2>Walk-in</h2>
                <hr>
                <div class="checkbox">
                  <label><input class="basic-walk-in-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][basic][walk_in][hands]" @if(isset($skills['coed_stunting_skills']['basic']['walk_in']) && !empty($skills['coed_stunting_skills']['basic']['walk_in']) && in_array('hands', $skills['coed_stunting_skills']['basic']['walk_in']))checked @endif>Hands</label>
                </div>
                <div class="checkbox">
                  <label><input class="basic-walk-in-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][basic][walk_in][extension]" @if(isset($skills['coed_stunting_skills']['basic']['walk_in']) && !empty($skills['coed_stunting_skills']['basic']['walk_in']) && in_array('extension', $skills['coed_stunting_skills']['basic']['walk_in']))checked @endif>Extension</label>
                </div>
                <div class="checkbox">
                  <label><input class="basic-walk-in-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][basic][walk_in][liberty]" @if(isset($skills['coed_stunting_skills']['basic']['walk_in']) && !empty($skills['coed_stunting_skills']['basic']['walk_in']) && in_array('liberty', $skills['coed_stunting_skills']['basic']['walk_in']))checked @endif>Liberty</label>
                </div>
                <div class="checkbox">
                  <label><input class="basic-walk-in-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][basic][walk_in][stretch]" @if(isset($skills['coed_stunting_skills']['basic']['walk_in']) && !empty($skills['coed_stunting_skills']['basic']['walk_in']) && in_array('stretch', $skills['coed_stunting_skills']['basic']['walk_in']))checked @endif>Stretch</label>
                </div>
                <h2>Toss</h2>
                <hr>
                <div class="checkbox">
                  <label><input class="basic-walk-in-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][basic][toss][hands]" @if(isset($skills['coed_stunting_skills']['basic']['toss']) && !empty($skills['coed_stunting_skills']['basic']['toss']) && in_array('hands', $skills['coed_stunting_skills']['basic']['toss']))checked @endif>Hands</label>
                </div>
                <div class="checkbox">
                  <label><input class="basic-walk-in-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][basic][toss][extension]" @if(isset($skills['coed_stunting_skills']['basic']['toss']) && !empty($skills['coed_stunting_skills']['basic']['toss']) && in_array('extension', $skills['coed_stunting_skills']['basic']['toss']))checked @endif>Extension</label>
                </div>
                <div class="checkbox">
                  <label><input class="basic-walk-in-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][basic][toss][liberty]" @if(isset($skills['coed_stunting_skills']['basic']['toss']) && !empty($skills['coed_stunting_skills']['basic']['toss']) && in_array('liberty', $skills['coed_stunting_skills']['basic']['toss']))checked @endif>Liberty</label>
                </div>
                <div class="checkbox">
                  <label><input class="basic-walk-in-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][basic][toss][stretch]" @if(isset($skills['coed_stunting_skills']['basic']['toss']) && !empty($skills['coed_stunting_skills']['basic']['toss']) && in_array('stretch', $skills['coed_stunting_skills']['basic']['toss']))checked @endif>Stretch</label>
                </div>
                <h2>From Hands</h2>
                <hr>
                <div class="checkbox">
                  <label><input class="basic-walk-in-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][basic][from_hands][hands]" @if(isset($skills['coed_stunting_skills']['basic']['from_hands']) && !empty($skills['coed_stunting_skills']['basic']['from_hands']) && in_array('hands', $skills['coed_stunting_skills']['basic']['from_hands']))checked @endif>Hands</label>
                </div>
                <div class="checkbox">
                  <label><input class="basic-walk-in-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][basic][from_hands][extension]" @if(isset($skills['coed_stunting_skills']['basic']['from_hands']) && !empty($skills['coed_stunting_skills']['basic']['from_hands']) && in_array('extension', $skills['coed_stunting_skills']['basic']['from_hands']))checked @endif>Extension</label>
                </div>
                <div class="checkbox">
                  <label><input class="basic-walk-in-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][basic][from_hands][liberty]" @if(isset($skills['coed_stunting_skills']['basic']['from_hands']) && !empty($skills['coed_stunting_skills']['basic']['from_hands']) && in_array('liberty', $skills['coed_stunting_skills']['basic']['from_hands']))checked @endif>Liberty</label>
                </div>
                <div class="checkbox">
                  <label><input class="basic-walk-in-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][basic][from_hands][stretch]" @if(isset($skills['coed_stunting_skills']['basic']['from_hands']) && !empty($skills['coed_stunting_skills']['basic']['from_hands']) && in_array('stretch', $skills['coed_stunting_skills']['basic']['from_hands']))checked @endif>Stretch</label>
                </div>
              </fieldset>
              <fieldset>
                <legend>Advanced</legend>
                <h2>One Arm</h2>
                <hr>
                <div class="checkbox">
                  <label><input class="advanced-walk-in-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][advanced][one_arm][hands]" @if(isset($skills['coed_stunting_skills']['advanced']['one_arm']) && !empty($skills['coed_stunting_skills']['advanced']['one_arm']) && in_array('hands', $skills['coed_stunting_skills']['advanced']['one_arm']))checked @endif>Hands</label>
                </div>
                <div class="checkbox">
                  <label><input class="advanced-walk-in-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][advanced][one_arm][extension]" @if(isset($skills['coed_stunting_skills']['advanced']['one_arm']) && !empty($skills['coed_stunting_skills']['advanced']['one_arm']) && in_array('extension', $skills['coed_stunting_skills']['advanced']['one_arm']))checked @endif>Extension</label>
                </div>
                <div class="checkbox">
                  <label><input class="advanced-walk-in-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][advanced][one_arm][liberty]" @if(isset($skills['coed_stunting_skills']['advanced']['one_arm']) && !empty($skills['coed_stunting_skills']['advanced']['one_arm']) && in_array('liberty', $skills['coed_stunting_skills']['advanced']['one_arm']))checked @endif>Liberty</label>
                </div>
                <div class="checkbox">
                  <label><input class="advanced-walk-in-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][advanced][one_arm][stretch]" @if(isset($skills['coed_stunting_skills']['advanced']['one_arm']) && !empty($skills['coed_stunting_skills']['advanced']['one_arm']) && in_array('stretch', $skills['coed_stunting_skills']['advanced']['one_arm']))checked @endif>Stretch</label>
                </div>
                <h2>Full Up</h2>
                <hr>
                <div class="checkbox">
                  <label><input class="advanced-walk-in-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][advanced][full_up][hands]" @if(isset($skills['coed_stunting_skills']['advanced']['full_up']) && !empty($skills['coed_stunting_skills']['advanced']['full_up']) && in_array('hands', $skills['coed_stunting_skills']['advanced']['full_up']))checked @endif>Hands</label>
                </div>
                <div class="checkbox">
                  <label><input class="advanced-walk-in-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][advanced][full_up][extension]" @if(isset($skills['coed_stunting_skills']['advanced']['full_up']) && !empty($skills['coed_stunting_skills']['advanced']['full_up']) && in_array('extension', $skills['coed_stunting_skills']['advanced']['full_up']))checked @endif>Extension</label>
                </div>
                <div class="checkbox">
                  <label><input class="advanced-walk-in-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][advanced][full_up][liberty]" @if(isset($skills['coed_stunting_skills']['advanced']['full_up']) && !empty($skills['coed_stunting_skills']['advanced']['full_up']) && in_array('liberty', $skills['coed_stunting_skills']['advanced']['full_up']))checked @endif>Liberty</label>
                </div>
                <div class="checkbox">
                  <label><input class="advanced-walk-in-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][advanced][full_up][stretch]" @if(isset($skills['coed_stunting_skills']['advanced']['full_up']) && !empty($skills['coed_stunting_skills']['advanced']['full_up']) && in_array('stretch', $skills['coed_stunting_skills']['advanced']['full_up']))checked @endif>Stretch</label>
                </div>
              </fieldset>
              <fieldset>
                <legend>Dismounts</legend>
                <h2>Full Down</h2>
                <div class="checkbox">
                  <label><input class="dismounts-full-down-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][dismounts][full_down][prep]" @if(isset($skills['coed_stunting_skills']['dismounts']['full_down']) && !empty($skills['coed_stunting_skills']['dismounts']['full_down']) && in_array('prep', $skills['coed_stunting_skills']['dismounts']['full_down']))checked @endif>Prep</label>
                </div>
                <div class="checkbox">
                  <label><input class="dismounts-full-down-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][dismounts][full_down][extension]" @if(isset($skills['coed_stunting_skills']['dismounts']['full_down']) && !empty($skills['coed_stunting_skills']['dismounts']['full_down']) && in_array('extension', $skills['coed_stunting_skills']['dismounts']['full_down']))checked @endif>Extension</label>
                </div>
                <div class="checkbox">
                  <label><input class="dismounts-full-down-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][dismounts][full_down][liberty]" @if(isset($skills['coed_stunting_skills']['dismounts']['full_down']) && !empty($skills['coed_stunting_skills']['dismounts']['full_down']) && in_array('liberty', $skills['coed_stunting_skills']['dismounts']['full_down']))checked @endif>Liberty</label>
                </div>
                <div class="checkbox">
                  <label><input class="dismounts-full-down-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][dismounts][full_down][stretch]" @if(isset($skills['coed_stunting_skills']['dismounts']['full_down']) && !empty($skills['coed_stunting_skills']['dismounts']['full_down']) && in_array('stretch', $skills['coed_stunting_skills']['dismounts']['full_down']))checked @endif>Stretch</label>
                </div>
                <div class="checkbox">
                  <label><input class="dismounts-full-down-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][dismounts][full_down][scorpion]" @if(isset($skills['coed_stunting_skills']['dismounts']['full_down']) && !empty($skills['coed_stunting_skills']['dismounts']['full_down']) && in_array('scorpion', $skills['coed_stunting_skills']['dismounts']['full_down']))checked @endif>Scorpion</label>
                </div>
                <div class="checkbox">
                  <label><input class="dismounts-full-down-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][dismounts][full_down][scale]" @if(isset($skills['coed_stunting_skills']['dismounts']['full_down']) && !empty($skills['coed_stunting_skills']['dismounts']['full_down']) && in_array('scale', $skills['coed_stunting_skills']['dismounts']['full_down']))checked @endif>Scale</label>
                </div>
                <h2>Double Down</h2>
                <div class="checkbox">
                  <label><input class="dismounts-full-down-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][dismounts][double_down][prep]" @if(isset($skills['coed_stunting_skills']['dismounts']['double_down']) && !empty($skills['coed_stunting_skills']['dismounts']['double_down']) && in_array('prep', $skills['coed_stunting_skills']['dismounts']['double_down']))checked @endif>Prep</label>
                </div>
                <div class="checkbox">
                  <label><input class="dismounts-full-down-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][dismounts][double_down][extension]" @if(isset($skills['coed_stunting_skills']['dismounts']['double_down']) && !empty($skills['coed_stunting_skills']['dismounts']['double_down']) && in_array('extension', $skills['coed_stunting_skills']['dismounts']['double_down']))checked @endif>Extension</label>
                </div>
                <div class="checkbox">
                  <label><input class="dismounts-full-down-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][dismounts][double_down][liberty]" @if(isset($skills['coed_stunting_skills']['dismounts']['double_down']) && !empty($skills['coed_stunting_skills']['dismounts']['double_down']) && in_array('liberty', $skills['coed_stunting_skills']['dismounts']['double_down']))checked @endif>Liberty</label>
                </div>
                <div class="checkbox">
                  <label><input class="dismounts-full-down-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][dismounts][double_down][stretch]" @if(isset($skills['coed_stunting_skills']['dismounts']['double_down']) && !empty($skills['coed_stunting_skills']['dismounts']['double_down']) && in_array('stretch', $skills['coed_stunting_skills']['dismounts']['double_down']))checked @endif>Stretch</label>
                </div>
                <div class="checkbox">
                  <label><input class="dismounts-full-down-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][dismounts][double_down][scorpion]" @if(isset($skills['coed_stunting_skills']['dismounts']['double_down']) && !empty($skills['coed_stunting_skills']['dismounts']['double_down']) && in_array('scorpion', $skills['coed_stunting_skills']['dismounts']['double_down']))checked @endif>Scorpion</label>
                </div>
                <div class="checkbox">
                  <label><input class="dismounts-full-down-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][dismounts][double_down][scale]" @if(isset($skills['coed_stunting_skills']['dismounts']['double_down']) && !empty($skills['coed_stunting_skills']['dismounts']['double_down']) && in_array('scale', $skills['coed_stunting_skills']['dismounts']['double_down']))checked @endif>Scale</label>
                </div>
                <h2>Other</h2>
                <div class="checkbox">
                  <label><input class="dismounts-other-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][dismounts][other][low_to_high_tic_toc]" @if(isset($skills['coed_stunting_skills']['dismounts']['other']) && !empty($skills['coed_stunting_skills']['dismounts']['other']) && in_array('low_to_high_tic_toc', $skills['coed_stunting_skills']['dismounts']['other']))checked @endif>Low to High Tic Toc</label>
                </div>
                <div class="checkbox">
                  <label><input class="dismounts-other-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][dismounts][other'][high_to_high_tic_toc]" @if(isset($skills['coed_stunting_skills']['dismounts']['other']) && !empty($skills['coed_stunting_skills']['dismounts']['other']) && in_array('high_to_high_tic_toc', $skills['coed_stunting_skills']['dismounts']['other']))checked @endif>High to High Tic Toc</label>
                </div>
                <div class="checkbox">
                  <label><input class="dismounts-other-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][dismounts][other][low_to_high_full_around]" @if(isset($skills['coed_stunting_skills']['dismounts']['other']) && !empty($skills['coed_stunting_skills']['dismounts']['other']) && in_array('low_to_high_full_around', $skills['coed_stunting_skills']['dismounts']['other']))checked @endif>Low to High Full Around</label>
                </div>
                <div class="checkbox">
                  <label><input class="dismounts-other-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][dismounts][other][high_to_high_full_around]" @if(isset($skills['coed_stunting_skills']['dismounts']['other']) && !empty($skills['coed_stunting_skills']['dismounts']['other']) && in_array('high_to_high_full_around', $skills['coed_stunting_skills']['dismounts']['other']))checked @endif>High to High Full Around</label>
                </div>
                <div class="checkbox">
                  <label><input class="dismounts-other-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][dismounts][other][hands_full_around]" @if(isset($skills['coed_stunting_skills']['dismounts']['other']) && !empty($skills['coed_stunting_skills']['dismounts']['other']) && in_array('hands_full_around', $skills['coed_stunting_skills']['dismounts']['other']))checked @endif>Hands Full Around</label>
                </div>
              </fieldset>
              <fieldset>
                <legend>Elite</legend>
                <h2>Flipping Coed Stunting</h2>
                <hr>
                <div class="checkbox">
                  <label><input class="elite-flipping-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][flipping_coed_stunting][rewind]" @if(isset($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && !empty($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && in_array('rewind', $skills['coed_stunting_skills']['elite']['flipping_coed_stunting']))checked @endif>Rewind</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-flipping-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][flipping_coed_stunting]['platform']" @if(isset($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && !empty($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && in_array('platform', $skills['coed_stunting_skills']['elite']['flipping_coed_stunting']))checked @endif>Platform</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-flipping-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][flipping_coed_stunting][liberty]" @if(isset($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && !empty($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && in_array('liberty', $skills['coed_stunting_skills']['elite']['flipping_coed_stunting']))checked @endif>Liberty</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-flipping-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][flipping_coed_stunting][stretch]" @if(isset($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && !empty($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && in_array('stretch', $skills['coed_stunting_skills']['elite']['flipping_coed_stunting']))checked @endif>Stretch</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-flipping-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][flipping_coed_stunting][cupie]" @if(isset($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && !empty($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && in_array('cupie', $skills['coed_stunting_skills']['elite']['flipping_coed_stunting']))checked @endif>Cupie</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-flipping-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][flipping_coed_stunting][1_and_half_twisting_full_up]" @if(isset($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && !empty($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && in_array('1_and_half_twisting_full_up', $skills['coed_stunting_skills']['elite']['flipping_coed_stunting']))checked @endif>1 & 1/2 Twisting Full Up</label>
                </div>
                <h2>Front Hand Spring Up</h2>
                <div class="checkbox">
                  <label><input class="elite-flipping-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][front_hand_spring_up]['platform']" @if(isset($skills['coed_stunting_skills']['elite']['front_hand_spring_up']) && !empty($skills['coed_stunting_skills']['elite']['front_hand_spring_up']) && in_array('platform', $skills['coed_stunting_skills']['elite']['front_hand_spring_up']))checked @endif>Platform</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-flipping-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][front_hand_spring_up][liberty]" @if(isset($skills['coed_stunting_skills']['elite']['front_hand_spring_up']) && !empty($skills['coed_stunting_skills']['elite']['front_hand_spring_up']) && in_array('liberty', $skills['coed_stunting_skills']['elite']['front_hand_spring_up']))checked @endif>Liberty</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-flipping-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][front_hand_spring_up][stretch]" @if(isset($skills['coed_stunting_skills']['elite']['front_hand_spring_up']) && !empty($skills['coed_stunting_skills']['elite']['front_hand_spring_up']) && in_array('stretch', $skills['coed_stunting_skills']['elite']['front_hand_spring_up']))checked @endif>Stretch</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-flipping-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][front_hand_spring_up][cupie]" @if(isset($skills['coed_stunting_skills']['elite']['front_hand_spring_up']) && !empty($skills['coed_stunting_skills']['elite']['front_hand_spring_up']) && in_array('cupie', $skills['coed_stunting_skills']['elite']['front_hand_spring_up']))checked @endif>Cupie</label>
                </div>
                <hr>
                <h2>Back Hand Spring Up</h2>
                <hr>
                <div class="checkbox">
                  <label><input class="elite-flipping-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][back_hand_spring_up]['platform']" @if(isset($skills['coed_stunting_skills']['elite']['back_hand_spring_up']) && !empty($skills['coed_stunting_skills']['elite']['back_hand_spring_up']) && in_array('platform', $skills['coed_stunting_skills']['elite']['back_hand_spring_up']))checked @endif>Platform</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-flipping-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][back_hand_spring_up][liberty]" @if(isset($skills['coed_stunting_skills']['elite']['back_hand_spring_up']) && !empty($skills['coed_stunting_skills']['elite']['back_hand_spring_up']) && in_array('liberty', $skills['coed_stunting_skills']['elite']['back_hand_spring_up']))checked @endif>Liberty</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-flipping-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][back_hand_spring_up][stretch]" @if(isset($skills['coed_stunting_skills']['elite']['back_hand_spring_up']) && !empty($skills['coed_stunting_skills']['elite']['back_hand_spring_up']) && in_array('stretch', $skills['coed_stunting_skills']['elite']['back_hand_spring_up']))checked @endif>Stretch</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-flipping-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][back_hand_spring_up][cupie]" @if(isset($skills['coed_stunting_skills']['elite']['back_hand_spring_up']) && !empty($skills['coed_stunting_skills']['elite']['back_hand_spring_up']) && in_array('cupie', $skills['coed_stunting_skills']['elite']['back_hand_spring_up']))checked @endif>Cupie</label>
                </div>
                <h2>Hand in Hand</h2>
                <hr>
                <div class="checkbox">
                  <label><input class="elite-flipping-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][hand_in_hand]['platform']" @if(isset($skills['coed_stunting_skills']['elite']['hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['hand_in_hand']) && in_array('platform', $skills['coed_stunting_skills']['elite']['hand_in_hand']))checked @endif>Platform</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-flipping-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][hand_in_hand][liberty]" @if(isset($skills['coed_stunting_skills']['elite']['hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['hand_in_hand']) && in_array('liberty', $skills['coed_stunting_skills']['elite']['hand_in_hand']))checked @endif>Liberty</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-flipping-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][hand_in_hand][stretch]" @if(isset($skills['coed_stunting_skills']['elite']['hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['hand_in_hand']) && in_array('stretch', $skills['coed_stunting_skills']['elite']['hand_in_hand']))checked @endif>Stretch</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-flipping-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][hand_in_hand][cupie]" @if(isset($skills['coed_stunting_skills']['elite']['hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['hand_in_hand']) && in_array('cupie', $skills['coed_stunting_skills']['elite']['hand_in_hand']))checked @endif>Cupie</label>
                </div>
                <h2>Extended Hand in Hand</h2>
                <hr>
                <div class="checkbox">
                  <label><input class="elite-flipping-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][extended_hand_in_hand]['platform']" @if(isset($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('platform', $skills['coed_stunting_skills']['elite']['extended_hand_in_hand']))checked @endif>Platform</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-flipping-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][extended_hand_in_hand][liberty]" @if(isset($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('liberty', $skills['coed_stunting_skills']['elite']['extended_hand_in_hand']))checked @endif>Liberty</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-flipping-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][extended_hand_in_hand][stretch]" @if(isset($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('stretch', $skills['coed_stunting_skills']['elite']['extended_hand_in_hand']))checked @endif>Stretch</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-flipping-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][extended_hand_in_hand][cupie]" @if(isset($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('cupie', $skills['coed_stunting_skills']['elite']['extended_hand_in_hand']))checked @endif>Cupie</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-extended-hand-hand-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][extended_hand_in_hand][full_up]" @if(isset($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('full_up', $skills['coed_stunting_skills']['elite']['extended_hand_in_hand']))checked @endif>Full Up</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-extended-hand-hand-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][extended_hand_in_hand][inverted_cupie]" @if(isset($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('inverted_cupie', $skills['coed_stunting_skills']['elite']['extended_hand_in_hand']))checked @endif>Inverted Cupie</label>
                </div>
                <h2>Other</h2>
                <hr>
                <div class="checkbox">
                  <label><input class="elite-other-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][other][double_up]" @if(isset($skills['coed_stunting_skills']['elite']['other']) && !empty($skills['coed_stunting_skills']['elite']['other']) && in_array('double_up', $skills['coed_stunting_skills']['elite']['other']))checked @endif>Double Up</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-other-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][other][one_arm]" @if(isset($skills['coed_stunting_skills']['elite']['other']) && !empty($skills['coed_stunting_skills']['elite']['other']) && in_array('one_arm', $skills['coed_stunting_skills']['elite']['other']))checked @endif>One Arm</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-other-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][other][double_cupie]" @if(isset($skills['coed_stunting_skills']['elite']['other']) && !empty($skills['coed_stunting_skills']['elite']['other']) && in_array('double_cupie', $skills['coed_stunting_skills']['elite']['other']))checked @endif>Double Cupie</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-other-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][other][cartwheel_up]" @if(isset($skills['coed_stunting_skills']['elite']['other']) && !empty($skills['coed_stunting_skills']['elite']['other']) && in_array('cartwheel_up', $skills['coed_stunting_skills']['elite']['other']))checked @endif>Cartwheel Up</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-other-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][other][side_sumy_up]" @if(isset($skills['coed_stunting_skills']['elite']['other']) && !empty($skills['coed_stunting_skills']['elite']['other']) && in_array('side_sumy_up', $skills['coed_stunting_skills']['elite']['other']))checked @endif>Side Sumy Up</label>
                </div>
                <div class="checkbox">
                  <label><input class="elite-other-coed-stunting" type="checkbox" disabled  name="skills[coed_stunting_skills][elite][other][front_ariel_up]" @if(isset($skills['coed_stunting_skills']['elite']['other']) && !empty($skills['coed_stunting_skills']['elite']['other']) && in_array('front_ariel_up', $skills['coed_stunting_skills']['elite']['other']))checked @endif>Front Ariel Up</label>
                </div>

              </fieldset>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
@endsection
