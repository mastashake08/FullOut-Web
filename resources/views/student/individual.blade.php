@extends('layouts.app')

@section('content')
<cheerleader :user-id={{$cheerleader->id}}></cheerleader>
<div class="container">
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
              <div class="panel-heading"><a data-toggle="collapse" href="#spring">Spring Floor Tumbling</a></div>
              <div id="spring" class="panel-collapse collapse">
              <div class="panel-body">


                                      <fieldset>
                                        <legend>Basic Running</legend>

                                        <div class="form-group">
                                          <div class="checkbox">
                                            <label><input class="basic-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][basic_running][round_off]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['basic_running']['round_off']))checked @endif>Round Off</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="basic-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][basic_running][backhand_spring]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['basic_running']['backhand_spring']))checked @endif>Backhand Spring</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="basic-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][basic_running][front_walk_over]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['basic_running']['front_walk_over']))checked @endif>Front Walk Over</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="basic-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][basic_running][round_off_2_backhand_spring]"@if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['basic_running']['round_off_2_backhand_spring']))checked @endif>Round Off, 2 Backhand Spring</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="basic-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][basic_running][round_off_3_backhand_spring]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['basic_running']['round_off_3_backhand_spring']))checked @endif>Round Off, 3 Backhand Spring</label>
                                          </div>
                                        </div>
                                      </fieldset>
                                      <fieldset>
                                        <legend>Basic Standing</legend>

                                        <div class="form-group">
                                          <div class="checkbox">
                                            <label><input class="basic-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][basic_standing][bhs]"  @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['basic_standing']['bhs']))checked @endif>Basic BackHand Spring</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="basic-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][basic_standing][2_bhs]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['basic_standing']['2_bhs']))checked @endif>2 Basic BackHand Spring</label>
                                          </div>
                                          <div class="checkbox">
                                          <label><input class="basic-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][basic_standing][3_bhs]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['basic_standing']['3_bhs']))checked @endif>3 or More Basic BackHand Spring</label>
                                          </div>
                                      </fieldset>
                                      <fieldset>
                                        <legend>Advanced Running</legend>
                                        <div class="form-group">
                                          <div class="checkbox">
                                            <label><input class="advanced-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_running][round_off_tuck]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['advanced_running']['round_off_tuck']))checked @endif>Round Off, Tuck</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="advanced-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_running][round_off_bhs_tuck]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['advanced_running']['round_off_bhs_tuck']))checked @endif>Round Off, Backhand Spring, Tuck</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="advanced-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_running][round_off_bhs_tuck_2_bhs]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['advanced_running']['round_off_bhs_tuck_2_bhs']))checked @endif>Round Off, Backhand Spring, Tuck, 2x Backhand Spring, Tuck</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="advanced-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_running][round_off_bhs_whip]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['advanced_running']['round_off_bhs_whip']))checked @endif>Round Off, Backhand Spring, Whip</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="advanced-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_running][round_off_bhs_layout]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['advanced_running']['round_off_bhs_layout']))checked @endif>Round Off, Backhand Spring, Layout</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="advanced-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_running][round_off_bhs_whip_2_bhs_layout]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['advanced_running']['round_off_bhs_whip_2_bhs_layout']))checked @endif>Round Off, Backhand Spring, Whip, 2x Backhand Spring, Layout</label>
                                          </div>
                                      </fieldset>
                                      <fieldset>
                                        <legend>Advanced Standing</legend>
                                        <div class="form-group">
                                          <div class="checkbox">
                                            <label><input class="advanced-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_standing][3_bhs_tuck]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['advanced_standing']['3_bhs_tuck']))checked @endif>3x Backhand Spring, Tuck</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="advanced-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_standing][2_bhs_tuck]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['advanced_standing']['2_bhs_tuck']))checked @endif>2x Backhand Spring, Tuck</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="advanced-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_standing][bhs_tuck]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['advanced_standing']['bhs_tuck']))checked @endif>Backhand Spring, Tuck</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="advanced-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_standing][tuck]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['advanced_standing']['tuck']))checked @endif>Tuck</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="advanced-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_standing][3_bhs_layout]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['advanced_standing']['3_bhs_layout']))checked @endif>3x Backhand Spring, Layout</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="advanced-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_standing][2_bhs_layout]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['advanced_standing']['2_bhs_layout']))checked @endif>2x Backhand Spring, Layout</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="advanced-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_standing][bhs_layout]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['advanced_standing']['bhs_layout']))checked @endif>Backhand Spring, Layout</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="advanced-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_standing][tuck_2_bhs_layout]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['advanced_standing']['tuck_2_bhs_layout']))checked @endif>Tuck, 2x Backhand Spring, Layout</label>
                                          </div>
                                      </fieldset>
                                      <fieldset>
                                        <legend>Elite Running</legend>
                                        <div class="form-group">
                                          <div class="checkbox">
                                            <label><input class="elite-running-spring" type="checkbox" name="skills[spring_floor_tumbling][elite_running][round_off_bhs_half]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_running']['round_off_bhs_half']))checked @endif>Round Off, Backhand Spring, Half</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_running][round_off_bhs_full]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_running']['round_off_bhs_half_full']))checked @endif>Round Off, Backhand Spring, Full</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_running][round_off_bhs_double]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_running']['round_off_bhs_half_double']))checked @endif>Round Off, Backhand Spring, Double</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_running][front_tuck_round_off_bhs_full]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_running']['front_tuck_round_off_bhs_full']))checked @endif>Front Tuck, Round Off, Backhand Spring, Full</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_running][round_off_bhs_full_half]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_running']['round_off_bhs_full_half']))checked @endif>Round Off, Backhand Spring, Full and a 1/2</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_running][round_off_arabian_round_off_bhs_full]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_running']['round_off_arabian_round_off_bhs_full']))checked @endif>Round Off, Arabian, Round Off, Backhand Spring, Full</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_running][round_off_bhs_whip_full]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_running']['round_off_bhs_whip_full']))checked @endif>Round Off, Backhand Spring, Whip, Full</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_running][round_off_bhs_whip_double]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_running']['round_off_bhs_whip_double']))checked @endif>Round Off, Backhand Spring, Whip, Double</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_running][round_off_arabian_round_off_bhs_double]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_running']['round_off_arabian_round_off_bhs_double']))checked @endif>Round Off, Arabian, Round Off, Backhand Spring, Double</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_running][front_tuck_round_off_bhs_double]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_running']['front_tuck_round_off_bhs_double']))checked @endif>Front Tuck, Round Off, Backhand Spring, Double</label>
                                          </div>
                                        </div>
                                      </fieldset>
                                      <fieldset>
                                        <legend>Elite Standing</legend>
                                        <div class="form-group">
                                          <div class="checkbox">
                                            <label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][3_bhs_full]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_standing']['3_bhs_full']))checked @endif>3 Backhand Spring, Full</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-standing-spring" type="checkbox" name="skills[spring_floor_tumbling][elite_standing][2_bhs_full]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_standing']['2_bhs_full']))checked @endif>2 Backhand Spring, Full</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][bhs_full]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_standing']['bhs_full']))checked @endif>Backhand Spring, Full</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][full]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_standing']['full']))checked @endif>Full</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][3_bhs_double]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_standing']['3_bhs_double']))checked @endif>3 Backhand Spring, Double</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][2_bhs_double]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_standing']['2_bhs_doable']))checked @endif>2 Backhand Spring, Double</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][bhs_double]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_standing']['bhs_double']))checked @endif>Backhand Spring, Double</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][full_2_bhs_full]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_standing']['full_2_bhs_full']))checked @endif>Full, 2 Backhand Spring, Full</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][full_3_bhs_double]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_standing']['full_3_bhs_double']))checked @endif>Full, 3 Backhand Spring, Double</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][3_bhs_whip_full]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_standing']['3_bhs_whip_full']))checked @endif>3 Backhand Spring, Whip, Full</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][3_bhs_whip_double]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_standing']['3_bhs_whip_double']))checked @endif>3 Backhand Spring, Whip, Double</label>
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
                                  <div class="panel-heading"><a data-toggle="collapse" href="#hard">Hard Floor Tumbling</a></div>
                                  <div id="hard" class="panel-collapse collapse">
                                  <div class="panel-body">

                                      <fieldset>
                                        <legend>Basic Running</legend>

                                        <div class="form-group">
                                          <div class="checkbox">
                                            <label><input class="basic-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][basic_running][round_off]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['basic_running']['round_off']))checked @endif>Round Off</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="basic-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][basic_running][round_off_backhand_spring]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['basic_running']['round_off_backhand_spring']))checked @endif>Backhand Spring</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="basic-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][basic_running][front_walk_over]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['basic_running']['front_walk_over']))checked @endif>Front Walk Over</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="basic-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][basic_running][round_off_2_backhand_spring]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['basic_running']['round_off_2_backhand_spring']))checked @endif>Round Off, 2 Backhand Spring</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="basic-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][basic_running][round_off_3_backhand_spring]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['basic_running']['round_off_3_backhand_springs']))checked @endif>Round Off, 3 Backhand Spring</label>
                                          </div>
                                        </div>
                                      </fieldset>
                                      <fieldset>
                                        <legend>Basic Standing</legend>

                                        <div class="form-group">
                                          <div class="checkbox">
                                            <label><input class="basic-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][basic_standing][bhs]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['basic_standing']['bhs']))checked @endif>Basic Handstand</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="basic-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][basic_standing][2_bhs]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['basic_standing']['2_bhs']))checked @endif>2 Basic Handstand</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="basic-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][basic_standing][3_bhs]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['basic_standing']['3_bhs']))checked @endif>3 or More Basic Handstand</label>
                                          </div>
                                      </fieldset>
                                      <fieldset>
                                        <legend>Advanced Running</legend>
                                        <div class="form-group">
                                          <div class="checkbox">
                                            <label><input class="advanced-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][advanced_running][round_off_tuck]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['advanced_running']['round_off_tuck']))checked @endif>Round Off, Tuck</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="advanced-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][advanced_running][round_off_bhs_tuck]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['advanced_running']['round_off_bhs_tuck']))checked @endif>Round Off, Backhand Spring, Tuck</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="advanced-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][advanced_running][round_off_bhs_tuck_2_bhs_tuck]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['advanced_running']['round_off_bhs_tuck_2_bhs_tuck']))checked @endif>Round Off, Backhand Spring, Tuck, 2x Backhand Spring, Tuck</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="advanced-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][advanced_running][round_off_bhs_whip]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['advanced_running']['round_off_bhs_whip']))checked @endif>Round Off, Backhand Spring, Whip</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="advanced-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][advanced_running][round_off_bhs_layout]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['advanced_running']['round_off_bhs_layout']))checked @endif>Round Off, Backhand Spring, Layout</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="advanced-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][advanced_running][round_off_bhs_whip_2_bhs_layout]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['advanced_running']['round_off_bhs_whip_2_bhs_layout']))checked @endif>Round Off, Backhand Spring, Whip, 2x Backhand Spring, Layout</label>
                                          </div>
                                      </fieldset>
                                      <fieldset>
                                        <legend>Advanced Standing</legend>
                                        <div class="form-group">
                                          <div class="checkbox">
                                            <label><input class="advanced-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][advanced_standing][3_bhs_tuck]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['advanced_standing']['3_bhs_tuck']))checked @endif>3x Backhand Spring, Tuck</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="advanced-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][advanced_standing][2_bhs_tuck]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['advanced_standing']['2_bhs_tuck']))checked @endif>2x Backhand Spring, Tuck</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="advanced-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][advanced_standing][bhs_tuck]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['advanced_standing']['bhs_tuck']))checked @endif>Backhand Spring, Tuck</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="advanced-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][advanced_standing][tuck]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['advanced_standing']['tuck']))checked @endif>Tuck</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="advanced-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][advanced_standing][3_bhs_layout]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['advanced_standing']['3_bhs_layout']))checked @endif>3x Backhand Spring, Layout</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="advanced-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][advanced_standing][2_bhs_layout]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['advanced_standing']['2_bhs_layout']))checked @endif>2x Backhand Spring, Layout</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="advanced-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][advanced_standing][bhs_layout]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['advanced_standing']['bhs_layout']))checked @endif>Backhand Spring, Layout</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="advanced-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][advanced_standing][tuck_2_bhs_layout]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['advanced_standing']['tuck_2_bhs_layout']))checked @endif>Tuck, 2x Backhand Spring, Layout</label>
                                          </div>
                                      </fieldset>
                                      <fieldset>
                                        <legend>Elite Running</legend>
                                        <div class="form-group">
                                          <div class="checkbox">
                                            <label><input class="elite-running-hard" type="checkbox" name="skills[hard_floor_tumbling][elite_running][round_off_bhs_half]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_running']['round_off_bhs_half']))checked @endif>Round Off, Backhand Spring, Half</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_running][round_off_bhs_full]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_running']['round_off_bhs_full']))checked @endif>Round Off, Backhand Spring, Full</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_running][round_off_bhs_double]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_running']['round_off_bhs_double']))checked @endif>Round Off, Backhand Spring, Double</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_running][front_tuck_round_off_bhs_full]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_running']['front_tuck_round_off_bhs_full']))checked @endif>Front Tuck, Round Off, Backhand Spring, Full</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_running][round_off_bhs_full_and_half]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_running']['round_off_bhs_full_and_half']))checked @endif>Round Off, Backhand Spring, Full and a 1/2</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_running][round_off_arabian_round_off_bhs_full]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_running']['round_off_arabian_round_off_bhs_full']))checked @endif>Round Off, Arabian, Round Off, Backhand Spring, Full</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_running][round_off_bhs_whip_full]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_running']['round_off_bhs_whip_full']))checked @endif>Round Off, Backhand Spring, Whip, Full</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_running][round_off_bhs_whip_double]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_running']['round_off_bhs_whip_double']))checked @endif>Round Off, Backhand Spring, Whip, Double</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_running][round_off_arabian_round_off_bhs_double]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_running']['round_off_arabian_round_off_bhs_double']))checked @endif>Round Off, Arabian, Round Off, Backhand Spring, Double</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_running][front_tuck_round_off_bhs_double]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_running']['front_tuck_round_off_bhs_double']))checked @endif>Front Tuck, Round Off, Backhand Spring, Double</label>
                                          </div>
                                        </div>
                                      </fieldset>
                                      <fieldset>
                                        <legend>Elite Standing</legend>
                                        <div class="form-group">
                                          <div class="checkbox">
                                            <label><input class="elite-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][3_bhs_full]"  @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_standing']['front_tuck_round_off_bhs_double']))checked @endif>3 Backhand Spring, Full</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-standing-hard" type="checkbox" name="skills[hard_floor_tumbling][elite_standing][2_bhs_full]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_standing']['front_tuck_round_off_bhs_double']))checked @endif>2 Backhand Spring, Full</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][bhs_full]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_standing']['front_tuck_round_off_bhs_double']))checked @endif>Backhand Spring, Full</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][full]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_standing']['front_tuck_round_off_bhs_double']))checked @endif>Full</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][3_bhs_double]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_standing']['front_tuck_round_off_bhs_double']))checked @endif>3 Backhand Spring, Double</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][2_bhs_double]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_standing']['front_tuck_round_off_bhs_double']))checked @endif>2 Backhand Spring, Double</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][bhs_double]"@if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_standing']['front_tuck_round_off_bhs_double']))checked @endif>Backhand Spring, Double</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][full_2_bhs_full]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_standing']['front_tuck_round_off_bhs_double']))checked @endif>Full, 2 Backhand Spring, Full</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][full_3_bhs_double]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_standing']['front_tuck_round_off_bhs_double']))checked @endif>Full, 3 Backhand Spring, Double</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][3_bhs_whip_full]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_standing']['front_tuck_round_off_bhs_double']))checked @endif>3 Backhand Spring, Whip, Full</label>
                                          </div>
                                          <div class="checkbox">
                                            <label><input class="elite-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][3_bhs_whip_double]" @if(isset($cheerleader->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_standing']['front_tuck_round_off_bhs_double']))checked @endif>3 Backhand Spring, Whip, Double</label>
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
                                  <div class="panel-heading"><a data-toggle="collapse" href="#group">Group Stunting</a></div>
                                  <div id="group" class="panel-collapse collapse">
                                  <div class="panel-body ">
                                      <fieldset>
                                        <legend>Basic</legend>
                                        <h2>Group Stunting </h2>
                                        <hr>
                                        <div class="checkbox">
                                          <label><input class="basic-group-stunting" type="checkbox"  name="skills[group_stunting][basic][group_stunting][show_and_go]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['basic']['group_stunting']['show_and_go']))checked @endif>Show and Go</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="basic-group-stunting" type="checkbox"  name="skills[group_stunting][basic][group_stunting][extension]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['basic']['group_stunting']['extension']))checked @endif>Extension</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="basic-group-stunting" type="checkbox"  name="skills[group_stunting][basic][group_stunting][power_press]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['basic']['group_stunting']['power_press']))checked @endif>Power Press</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="basic-group-stunting" type="checkbox"  name="skills[group_stunting][basic][group_stunting][prep_level_liberty]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['basic']['group_stunting']['prep_level_liberty']))checked @endif>Prep Level Liberty</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="basic-group-stunting" type="checkbox"  name="skills[group_stunting][basic][group_stunting][extended_level_liberty]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['basic']['group_stunting']['extended_level_liberty']))checked @endif>Extended Level Liberty</label>
                                        </div>
                                        <h2>Stationary Group Stunting</h2>
                                        <hr>
                                        <div class="checkbox">
                                          <label><input class="basic-stationary-group-stunting" type="checkbox"  name="skills[group_stunting][basic][stationary_group_stuntung][prep_level_half_twist_up]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['basic']['stationary_group_stuntung']['prep_level_half_twist_up']))checked @endif>Prep Level 1/2 Twist Up</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="basic-stationary-group-stunting" type="checkbox"  name="skills[group_stunting][basic][stationary_group_stuntung][extended_level_half_twist_up]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['basic']['stationary_group_stuntung']['extended_level_half_twist_up']))checked @endif>Extended Level 1/2 Twist Up</label>
                                        </div>
                                      </fieldset>
                                      <fieldset>
                                        <legend>Advanced</legend>
                                        <h2>Prep Level</h2>
                                        <hr>

                                        <div class="checkbox">
                                          <label><input class="advance-prep-group-stunting" type="checkbox"  name="skills[group_stunting][advance][prep_level][switch_up]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['advance']['prep_level']['switch_up']))checked @endif>Switch Up</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="advance-prep-group-stunting" type="checkbox"  name="skills[group_stunting][advance][prep_level][full_up]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['advance']['prep_level']['full_up']))checked @endif>Full Up (Semi Releasing)</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="advance-prep-group-stunting" type="checkbox"  name="skills[group_stunting][advance][prep_level][one_half_full_up]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['advance']['prep_level']['one_half_full_up']))checked @endif>1 & 1/2 Full Ups (Semi Releasing)</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="advance-prep-group-stunting" type="checkbox"  name="skills[group_stunting][advance][prep_level][double_ups]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['advance']['prep_level']['one_half_full_up']))checked @endif>Double Ups</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="advance-prep-group-stunting" type="checkbox"  name="skills[group_stunting][advance][prep_level][full_twisting_switch_up]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['advance']['prep_level']['full_twisting_switch_up']))checked @endif>Full Twisting Switch Up (Releasing)</label>
                                        </div>
                                        <h2>Extended Level</h2>
                                        <hr>

                                        <div class="checkbox">
                                          <label><input class="advance-extended-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][switch_up]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['switch_up']))checked @endif>Switch Up</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="advance-extended-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][full_up]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['full_up']))checked @endif>Full Up (Semi Releasing)</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="advance-extended-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][one_half_full_up]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['one_half_full_up']))checked @endif>1 & 1/2 Full Ups (Semi Releasing)</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="advance-extended-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][double_ups]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['double_ups']))checked @endif>Double Ups</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="advance-extended-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][full_twisting_switch_up]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['full_twisting_switch_up']))checked @endif>Full Twisting Switch Up (Releasing)</label>
                                        </div>
                                        <h2>Full Down Dismount</h2>
                                        <hr>

                                        <div class="checkbox">
                                          <label><input class="advance-full-down-dismount-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['switch_up']" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['switch_up']))checked @endif>Switch Up</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="advance-full-down-dismount-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['full_up']" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['full_up']))checked @endif>Full Up (Semi Releasing)</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="advance-full-down-dismount-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['one_half_full_up']" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['one_half_full_up']))checked @endif>1 & 1/2 Full Ups (Semi Releasing)</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="advance-full-down-dismount-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['double_ups']" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['double_ups']))checked @endif>Double Ups</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="advance-full-down-dismount-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['full_twisting_switch_up']" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['full_twisting_switch_up']))checked @endif>Full Twisting Switch Up (Releasing)</label>
                                        </div>
                                        <h2>Double Down Dismount</h2>
                                        <hr>

                                        <div class="checkbox">
                                          <label><input class="double-down-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][switch_up]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['switch_up']))checked @endif>Switch Up</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="double-down-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][full_up]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['full_up']))checked @endif>Full Up (Semi Releasing)</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="double-down-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][one_half_full_up]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['one_half_full_up']))checked @endif>1 & 1/2 Full Ups (Semi Releasing)</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="double-down-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][double_ups]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['double_ups']))checked @endif>Double Ups</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="double-down-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][full_twisting_switch_up]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['full_twisting_switch_up']))checked @endif>Full Twisting Switch Up (Releasing)</label>
                                        </div>
                                        <h2>Other Dismount</h2>
                                        <hr>

                                        <div class="checkbox">
                                          <label><input class="other-dismount-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][switch_up]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['switch_up']))checked @endif>Switch Up</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="other-dismount-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][full_up]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['full_up']))checked @endif>Full Up (Semi Releasing)</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="other-dismount-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][one_half_full_up]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['one_half_full_up']))checked @endif>1 & 1/2 Full Ups (Semi Releasing)</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="other-dismount-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][double_ups]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['double_ups']))checked @endif>Double Ups</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="other-dismount-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][full_twisting_switch_up]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['full_twisting_switch_up']))checked @endif>Full Twisting Switch Up (Releasing)</label>
                                        </div>
                                      </fieldset>
                                      <fieldset>
                                        <legend>Elite</legend>
                                        <h2>2 Based Stunts</h2>
                                        <div class="checkbox">
                                          <label><input class="elite-2-based-stunts-group-stunting" type="checkbox"  name="skills[group_stunting][elite][2_based_stunts][prep]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['elite']['2_based_stunts']['prep']))checked @endif>Prep</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-2-based-stunts-group-stunting" type="checkbox"  name="skills[group_stunting][elite][2_based_stunts][extension]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['elite']['2_based_stunts']['extension']))checked @endif>Extension</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-2-based-stunts-group-stunting" type="checkbox"  name="skills[group_stunting][elite][2_based_stunts][extended_level_liberty]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['elite']['2_based_stunts']['extended_level_liberty']))checked @endif>Extended Level Liberty</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-2-based-stunts-group-stunting" type="checkbox"  name="skills[group_stunting][elite][2_based_stunts][one_handed_cupie_or_awesome]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['elite']['2_based_stunts']['one_handed_cupie_or_awesome']))checked @endif>One Handed Cupie or Awesome</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-2-based-stunts-group-stunting" type="checkbox"  name="skills[group_stunting][elite][2_based_stunts][full_up]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['elite']['2_based_stunts']['full_up']))checked @endif>Full Up<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-2-based-stunts-group-stunting" type="checkbox"  name="skills[group_stunting][elite][2_based_stunts][low_to_high_full_around]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['elite']['2_based_stunts']['low_to_high_full_around']))checked @endif>Low to High Full Around (Semi Releasing)</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-2-based-stunts-group-stunting" type="checkbox"  name="skills[group_stunting][elite][2_based_stunts][high_to_high_full_around]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['elite']['2_based_stunts']['high_to_high_full_around']))checked @endif>High to High Full Around (Semi Releasing)<label>
                                        </div>
                                        <h2>Flipping Group Stunting</h2>
                                        <hr>
                                        <div class="checkbox">
                                          <label><input class="elite-flipping-stunts-group-stunting" type="checkbox"  name="skills[group_stunting][elite][flipping_group_stunting][rewind]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['elite']['flipping_group_stunting']['rewind']))checked @endif>Rewind<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-flipping-stunts-group-stunting" type="checkbox"  name="skills[group_stunting][elite][flipping_group_stunting][platform]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['elite']['flipping_group_stunting']['platform']))checked @endif>Platform<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-flipping-stunts-group-stunting" type="checkbox"  name="skills[group_stunting][elite][flipping_group_stunting][liberty]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['elite']['flipping_group_stunting']['liberty']))checked @endif>Liberty<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-flipping-stunts-group-stunting" type="checkbox"  name="skills[group_stunting][elite][flipping_group_stunting][stretch]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['elite']['flipping_group_stunting']['stretch']))checked @endif>Stretch<label>
                                        </div>
                                        <h2>Front Hand Spring Up</h2>
                                        <hr>
                                        <div class="checkbox">
                                          <label><input class="elite-front-hand-spring-up-group-stunting" type="checkbox"  name="skills[group_stunting][elite][front_hand_spring_up][platform]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['elite']['front_hand_spring_up']['platform']))checked @endif>Platform<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-front-hand-spring-up-group-stunting" type="checkbox"  name="skills[group_stunting][elite][front_hand_spring_up][liberty]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['elite']['front_hand_spring_up']['liberty']))checked @endif>Liberty<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-front-hand-spring-up-group-stunting" type="checkbox"  name="skills[group_stunting][elite][front_hand_spring_up][stretch]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['elite']['front_hand_spring_up']['stretch']))checked @endif>Stretch<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-front-hand-spring-up-group-stunting" type="checkbox"  name="skills[group_stunting][elite][front_hand_spring_up][1_and_half_twisting_full_up]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['elite']['front_hand_spring_up']['1_and_half_twisting_full_up']))checked @endif>1 & 1/2 Twisting Full Up<label>
                                        </div>
                                        <h2>Back Hand Spring Up</h2>
                                        <hr>
                                        <div class="checkbox">
                                          <label><input class="elite-back-hand-spring-up-group-stunting" type="checkbox"  name="skills[group_stunting][elite][back_hand_spring_up][platform]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['elite']['back_hand_spring_up']['platform']))checked @endif>Platform<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-back-hand-spring-up-group-stunting" type="checkbox"  name="skills[group_stunting][elite][back_hand_spring_up][liberty]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['elite']['back_hand_spring_up']['liberty']))checked @endif>Liberty<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-back-hand-spring-up-group-stunting" type="checkbox"  name="skills[group_stunting][elite][back_hand_spring_up][stretch]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['elite']['back_hand_spring_up']['stretch']))checked @endif>Stretch<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-back-hand-spring-up-group-stunting" type="checkbox"  name="skills[group_stunting][elite][back_hand_spring_up][full_up]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['elite']['back_hand_spring_up']['full_up']))checked @endif>Full Up<label>
                                        </div>
                                        <h2>Hand in Hand</h2>
                                        <hr>
                                        <div class="checkbox">
                                          <label><input class="elite-hand-in-hand-group-stunting" type="checkbox"  name="skills[group_stunting][elite][hand_in_hand][platform]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['elite']['hand_in_hand']['platform']))checked @endif>Platform<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-hand-in-hand-group-stunting" type="checkbox"  name="skills[group_stunting][elite][hand_in_hand][liberty]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['elite']['hand_in_hand']['liberty']))checked @endif>Liberty<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-hand-in-hand-group-stunting" type="checkbox"  name="skills[group_stunting][elite][hand_in_hand][stretch]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['elite']['hand_in_hand']['stretch']))checked @endif>Stretch<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-hand-in-hand-group-stunting" type="checkbox"  name="skills[group_stunting][elite][hand_in_hand][full_up]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['elite']['hand_in_hand']['full_up']))checked @endif>Full Up<label>
                                        </div>
                                        <h2>Extended Hand in Hand</h2>
                                        <hr>
                                        <div class="checkbox">
                                          <label><input class="elite-extended-hand-in-hand-group-stunting" type="checkbox"  name="skills[group_stunting][elite][extended_hand_in_hand][platform]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['elite']['extended_hand_in_hand']['platform']))checked @endif>Platform<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-extended-hand-in-hand-group-stunting" type="checkbox"  name="skills[group_stunting][elite][extended_hand_in_hand][liberty]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['elite']['extended_hand_in_hand']['liberty']))checked @endif>Liberty<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-extended-hand-in-hand-group-stunting" type="checkbox"  name="skills[group_stunting][elite][extended_hand_in_hand][stretch]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['elite']['extended_hand_in_hand']['stretch']))checked @endif>Stretch<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-extended-hand-in-hand-group-stunting" type="checkbox"  name="skills[group_stunting][elite][extended_hand_in_hand][full_up]" @if(isset($cheerleader->skillSet->group_stunting_skills['group_stunting']['elite']['extended_hand_in_hand']['full_up']))checked @endif>Full Up<label>
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
                                  <div class="panel-heading"><a data-toggle="collapse" href="#coed">Coed Stunting</a></div>
                                  <div id="coed" class="panel-collapse collapse">
                                  <div class="panel-body ">

                                      <fieldset>
                                        <legend>Basic</legend>
                                        <h2>Walk-in</h2>
                                        <hr>
                                        <div class="checkbox">
                                          <label><input class="basic-walk-in-coed-stunting" type="checkbox"  name="skills[coed_stunting][basic][walk_in][hands]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['basic']['walk_in']['hands']))checked @endif>Hands<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="basic-walk-in-coed-stunting" type="checkbox"  name="skills[coed_stunting][basic][walk_in][extension]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['basic']['walk_in']['extension']))checked @endif>Extension<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="basic-walk-in-coed-stunting" type="checkbox"  name="skills[coed_stunting][basic][walk_in][liberty]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['basic']['walk_in']['liberty']))checked @endif>Liberty<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="basic-walk-in-coed-stunting" type="checkbox"  name="skills[coed_stunting][basic][walk_in][stretch]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['basic']['walk_in']['stretch']))checked @endif>Stretch<label>
                                        </div>
                                        <h2>Toss</h2>
                                        <hr>
                                        <div class="checkbox">
                                          <label><input class="basic-toss-coed-stunting" type="checkbox"  name="skills[coed_stunting][basic][toss][hands]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['basic']['toss']['hands']))checked @endif>Hands<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="basic-toss-coed-stunting" type="checkbox"  name="skills[coed_stunting][basic][toss][extension]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['basic']['toss']['extension']))checked @endif>Extension<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="basic-toss-coed-stunting" type="checkbox"  name="skills[coed_stunting][basic][toss][liberty]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['basic']['toss']['liberty']))checked @endif>Liberty<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="basic-toss-coed-stunting" type="checkbox"  name="skills[coed_stunting][basic][toss][stretch]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['basic']['toss']['stretch']))checked @endif>Stretch<label>
                                        </div>
                                        <h2>From Hands</h2>
                                        <hr>
                                        <div class="checkbox">
                                          <label><input class="basic-from-hands-coed-stunting" type="checkbox"  name="skills[coed_stunting][basic][from_hands][hands]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['basic']['from_hands']['hands']))checked @endif>Hands<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="basic-from-hands-coed-stunting" type="checkbox"  name="skills[coed_stunting][basic][from_hands][extension]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['basic']['from_hands']['extension']))checked @endif>Extension<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="basic-from-hands-coed-stunting" type="checkbox"  name="skills[coed_stunting][basic][from_hands][liberty]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['basic']['from_hands']['liberty']))checked @endif>Liberty<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="basic-from-hands-coed-stunting" type="checkbox"  name="skills[coed_stunting][basic][from_hands][stretch]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['basic']['from_hands']['stretch']))checked @endif>Stretch<label>
                                        </div>
                                      </fieldset>
                                      <fieldset>
                                        <legend>Advanced</legend>
                                        <h2>One Arm</h2>
                                        <hr>
                                        <div class="checkbox">
                                          <label><input class="advanced-one-arm-coed-stunting" type="checkbox"  name="skills[coed_stunting][advanced][one_arm][hands]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['advanced']['one_arm']['hands']))checked @endif>Hands<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="advanced-one-arm-coed-stunting" type="checkbox"  name="skills[coed_stunting][advanced][one_arm][extension]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['advanced']['one_arm']['extension']))checked @endif>Extension<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="advanced-one-arm-coed-stunting" type="checkbox"  name="skills[coed_stunting][advanced][one_arm][liberty]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['advanced']['one_arm']['liberty']))checked @endif>Liberty<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="advanced-one-arm-coed-stunting" type="checkbox"  name="skills[coed_stunting][advanced][one_arm][stretch]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['advanced']['one_arm']['stretch']))checked @endif>Stretch<label>
                                        </div>
                                        <h2>Full Up</h2>
                                        <hr>
                                        <div class="checkbox">
                                          <label><input class="advanced-full-up-coed-stunting" type="checkbox"  name="skills[coed_stunting][advanced][full_up][hands]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['advanced']['full_up']['hands']))checked @endif>Hands<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="basic-toss-coed-stunting" type="checkbox"  name="skills[coed_stunting][advanced][full_up][extension]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['advanced']['full_up']['extension']))checked @endif>Extension<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="basic-toss-coed-stunting" type="checkbox"  name="skills[coed_stunting][advanced][full_up][liberty]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['advanced']['full_up']['liberty']))checked @endif>Liberty<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="basic-toss-coed-stunting" type="checkbox"  name="skills[coed_stunting][advanced][full_up][stretch]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['advanced']['full_up']['stretch']))checked @endif>Stretch<label>
                                        </div>
                                      </fieldset>
                                      <fieldset>
                                        <legend>Dismounts</legend>
                                        <h2>Full Down</h2>
                                        <div class="checkbox">
                                          <label><input class="dismounts-full-down-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][full_down][prep]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['full_down']['prep']))checked @endif>Prep<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="dismounts-full-down-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][full_down][extension]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['full_down']['extension']))checked @endif>Extension<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="dismounts-full-down-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][full_down][liberty]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['full_down']['liberty']))checked @endif>Liberty<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="dismounts-full-down-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][full_down][stretch]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['full_down']['stretch']))checked @endif>Stretch<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="dismounts-full-down-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][full_down][scorpion]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['full_down']['scorpion']))checked @endif>Scorpion<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="dismounts-full-down-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][full_down][scale]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['full_down']['scale']))checked @endif>Scale<label>
                                        </div>
                                        <h2>Double Down</h2>
                                        <div class="checkbox">
                                          <label><input class="dismounts-double-down-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][double_down][prep]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['double_down']['prep']))checked @endif>Prep<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="dismounts-double-down-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][double_down][extension]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['double_down']['extension']))checked @endif>Extension<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="dismounts-double-down-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][double_down][liberty]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['double_down']['liberty']))checked @endif>Liberty<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="dismounts-double-down-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][double_down][stretch]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['double_down']['stretch']))checked @endif>Stretch<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="dismounts-double-down-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][double_down][scorpion]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['double_down']['scorpion']))checked @endif>Scorpion<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="dismounts-double-down-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][double_down][scale]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['double_down']['scale']))checked @endif>Scale<label>
                                        </div>
                                        <h2>Other</h2>
                                        <div class="checkbox">
                                          <label><input class="dismounts-other-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][other][low_to_high_tic_toc]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['other']['low_to_high_tic_toc']))checked @endif>Low to High Tic Toc<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="dismounts-other-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][other'][high_to_high_tic_toc]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['other']['high_to_high_tic_toc']))checked @endif>High to High Tic Toc<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="dismounts-other-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][other][low_to_high_full_around]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['other']['low_to_high_full_around']))checked @endif>Low to High Full Around<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="dismounts-other-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][other][high_to_high_full_around]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['other']['high_to_high_full_around']))checked @endif>High to High Full Around<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="dismounts-other-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][other][hands_full_around]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['other']['hands_full_around']))checked @endif>Hands Full Around<label>
                                        </div>
                                      </fieldset>
                                      <fieldset>
                                        <legend>Elite</legend>
                                        <h2>Flipping Coed Stunting</h2>
                                        <hr>
                                        <div class="checkbox">
                                          <label><input class="elite-flipping-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][flipping_coed_stunting][rewind]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['elite']['flipping_coed_stunting']['rewind']))checked @endif>Rewind<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-flipping-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][flipping_coed_stunting]['platform']" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['elite']['flipping_coed_stunting']['platform']))checked @endif>Platform<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-flipping-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][flipping_coed_stunting][liberty]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['elite']['flipping_coed_stunting']['liberty']))checked @endif>Liberty<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-flipping-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][flipping_coed_stunting][stretch]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['elite']['flipping_coed_stunting']['stretch']))checked @endif>Stretch<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-flipping-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][flipping_coed_stunting][cupie]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['elite']['flipping_coed_stunting']['cupie']))checked @endif>Cupie<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-flipping-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][flipping_coed_stunting][1_and_half_twisting_full_up]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['elite']['flipping_coed_stunting']['1_and_half_twisting_full_up']))checked @endif>1 & 1/2 Twisting Full Up<label>
                                        </div>
                                        <h2>Front Hand Spring Up</h2>
                                        <div class="checkbox">
                                          <label><input class="elite-front-hand-spring-up-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['front_hand_spring_up']['platform']" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['elite']['front_hand_spring_up']['platform']))checked @endif>Platform<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-front-hand-spring-up-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['front_hand_spring_up']['liberty']" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['elite']['front_hand_spring_up']['liberty']))checked @endif>Liberty<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-front-hand-spring-up-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['front_hand_spring_up']['stretch']" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['elite']['front_hand_spring_up']['stretch']))checked @endif>Stretch<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-front-hand-spring-up-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['front_hand_spring_up']['cupie']" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['elite']['front_hand_spring_up']['cupie']))checked @endif>Cupie<label>
                                        </div>
                                        <hr>
                                        <h2>Back Hand Spring Up</h2>
                                        <hr>
                                        <div class="checkbox">
                                          <label><input class="elite-back-hand-spring-up-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][back_hand_spring_up][platform]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['elite']['back_hand_spring_up']['platform']))checked @endif>Platform<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-back-hand-spring-up-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][back_hand_spring_up][liberty]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['elite']['back_hand_spring_up']['liberty']))checked @endif>Liberty<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-back-hand-spring-up-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][back_hand_spring_up][stretch]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['elite']['back_hand_spring_up']['stretch']))checked @endif>Stretch<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-back-hand-spring-up-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][back_hand_spring_up][cupie]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['elite']['back_hand_spring_up']['cupie']))checked @endif>Cupie<label>
                                        </div>
                                        <h2>Hand in Hand</h2>
                                        <hr>
                                        <div class="checkbox">
                                          <label><input class="elite-hand-hand-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][hand_in_hand][platform]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['elite']['hand_in_hand']['platform']))checked @endif>Platform<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-hand-hand-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][hand_in_hand][liberty]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['elite']['hand_in_hand']['liberty']))checked @endif>Liberty<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-hand-hand-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][hand_in_hand][stretch]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['elite']['hand_in_hand']['stretch']))checked @endif>Stretch<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-hand-hand-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][hand_in_hand][cupie]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['elite']['hand_in_hand']['cupie']))checked @endif>Cupie<label>
                                        </div>
                                        <h2>Extended Hand in Hand</h2>
                                        <hr>
                                        <div class="checkbox">
                                          <label><input class="elite-extended-hand-hand-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][extended_hand_in_hand][platform]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['elite']['extended_hand_in_hand']['platform']))checked @endif>Platform<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-extended-hand-hand-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][extended_hand_in_hand][liberty]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['elite']['extended_hand_in_hand']['liberty']))checked @endif>Liberty<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-extended-hand-hand-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][extended_hand_in_hand][stretch]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['elite']['extended_hand_in_hand']['stretch']))checked @endif>Stretch<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-extended-hand-hand-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][extended_hand_in_hand][cupie]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['elite']['extended_hand_in_hand']['cupie']))checked @endif>Cupie<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-extended-hand-hand-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][extended_hand_in_hand][full_up]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['elite']['extended_hand_in_hand']['full_up']))checked @endif>Full Up<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-extended-hand-hand-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][extended_hand_in_hand][inverted_cupie]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['elite']['extended_hand_in_hand']['inverted_cupie']))checked @endif>Inverted Cupie<label>
                                        </div>
                                        <h2>Other</h2>
                                        <hr>
                                        <div class="checkbox">
                                          <label><input class="elite-other-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][other][double_up]" @if(isset($cheerleader->skillSet->coed_stunting_skills['group_stunting']['basic']['stationary_group_stuntung']['prep_level_half_twist_up']))checked @endif>Double Up<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-other-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][other][one_arm]" @if(isset($cheerleader->skillSet->coed_stunting_skills['group_stunting']['basic']['stationary_group_stuntung']['prep_level_half_twist_up']))checked @endif>One Arm<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-other-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][other][double_cupie]" @if(isset($cheerleader->skillSet->coed_stunting_skills['group_stunting']['basic']['stationary_group_stuntung']['prep_level_half_twist_up']))checked @endif>Double Cupie<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-other-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][other][cartwheel_up]" @if(isset($cheerleader->skillSet->coed_stunting_skills['group_stunting']['basic']['stationary_group_stuntung']['prep_level_half_twist_up']))checked @endif>Cartwheel Up<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-other-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][other][side_sumy_up]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['elite']['other']['side_sumy_up']))checked @endif>Side Sumy Up<label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input class="elite-other-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][other][front_ariel_up]" @if(isset($cheerleader->skillSet->coed_stunting_skills['coed_stunting']['elite']['other']['front_ariel_up']))checked @endif>Front Ariel Up<label>
                                        </div>

                                      </fieldset>
                                </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
