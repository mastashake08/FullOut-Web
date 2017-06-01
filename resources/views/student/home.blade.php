@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">Spring Floor Tumbling</div>
                <div class="panel-body">
                  <form class="form" method="post" action="" role="form">
                    {{csrf_field()}}
                    <fieldset>
                      <legend>Beginner Running</legend>

                      <div class="form-group">
                        <div class="checkbox">
                          <label><input class="beginner-running-spring" type="checkbox"  name="round_off">Round Off</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="beginner-running-spring" type="checkbox"  name="round_off_backhand_spring">Backhand Spring</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="beginner-running-spring" type="checkbox"  name="front_walk_over">Front Walk Over</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="beginner-running-spring" type="checkbox"  name="round_off_2_backhand_spring">Round Off, 2 Backhand Spring</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="beginner-running-spring" type="checkbox"  name="round_off_3_backhand_spring">Round Off, 3 Backhand Spring</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="beginner-running-spring" type="checkbox" id="checkAllRunning">Check All</label>
                        </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>Beginner Standing</legend>

                      <div class="form-group">
                        <div class="checkbox">
                          <label><input class="beginner-standing-spring" type="checkbox"  name="bhs">Basic BackHand Spring</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="beginner-standing-spring" type="checkbox"  name="2_bhs">2 Basic BackHand Spring</label>
                        </div>
                        <div class="checkbox">
                        <label><input class="beginner-standing-spring" type="checkbox"  name="3_bhs">3 or More Basic BackHand Spring</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="beginner-standing-spring" type="checkbox" id="checkAllStanding">Check All</label>
                        </div>
                    </fieldset>
                    <fieldset>
                      <legend>Advanced Running</legend>
                      <div class="form-group">
                        <div class="checkbox">
                          <label><input class="advanced-running-spring" type="checkbox"  name="bhs">Round Off, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-running-spring" type="checkbox"  name="2_bhs">Round Off, Backhand Spring, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-running-spring" type="checkbox"  name="3_bhs">Round Off, Backhand Spring, Tuck, 2x Backhand Spring, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-running-spring" type="checkbox"  name="3_bhs">Round Off, Backhand Spring, Whip</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-running-spring" type="checkbox"  name="3_bhs">Round Off, Backhand Spring, Layout</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-running-spring" type="checkbox"  name="3_bhs">Round Off, Backhand Spring, Whip, 2x Backhand Spring, Layout</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-running-spring" type="checkbox" id="checkAllStanding">Check All</label>
                        </div>
                    </fieldset>
                    <fieldset>
                      <legend>Advanced Standing</legend>
                      <div class="form-group">
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="bhs">3x Backhand Spring, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="2_bhs">2x Backhand Spring, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="3_bhs">Backhand Spring, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="3_bhs">Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="3_bhs">3x Backhand Spring, Layout</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="3_bhs">2x Backhand Spring, Layout</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="3_bhs">Backhand Spring, Layout</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="3_bhs">Tuck, 2x Backhand Spring, Layout</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox" id="checkAllAdvanceStanding">Check All</label>
                        </div>
                    </fieldset>
                    <fieldset>
                      <legend>Elite Running</legend>
                      <div class="form-group">
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox" name="2_bhs_full">Round Off, Backhand Spring, Half</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="bhs_full">Round Off, Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="full">Round Off, Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="3_bhs_double">Front Tuck, Round Off, Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="2_bhs_double">Round Off, Backhand Spring, Full and a 1/2</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="bhs_double">Round Off, Arabian, Round Off, Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="full_2_bhs_full">Round Off, Backhand Spring, Whip, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="full_3_bhs_double">Round Off, Backhand Spring, Whip, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="3_bhs_whip_full">Round Off, Arabian, Round Off, Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="3_bhs_whip_double">Front Tuck, Round Off, Backhand Spring, Double</label>
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
                          <label><input class="elite-standing-spring" type="checkbox"  name="3_bhs_full">3 Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox" name="2_bhs_full">2 Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="bhs_full">Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="full">Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="3_bhs_double">3 Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="2_bhs_double">2 Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="bhs_double">Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="full_2_bhs_full">Full, 2 Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="full_3_bhs_double">Full, 3 Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="3_bhs_whip_full">3 Backhand Spring, Whip, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="3_bhs_whip_double">3 Backhand Spring, Whip, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox" id="checkAllEliteStanding">Check All</label>
                        </div>
                      </div>
                    </fieldset>
                    <button class="btn btn-success"> Edit Beginner Skills</button>
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
                  <form class="form" method="post" action="" role="form">
                    {{csrf_field()}}
                    <fieldset>
                      <legend>Beginner Running</legend>

                      <div class="form-group">
                        <div class="checkbox">
                          <label><input class="beginner-running-spring" type="checkbox"  name="round_off">Round Off</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="beginner-running-spring" type="checkbox"  name="round_off_backhand_spring">Backhand Spring</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="beginner-running-spring" type="checkbox"  name="front_walk_over">Front Walk Over</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="beginner-running-spring" type="checkbox"  name="round_off_2_backhand_spring">Round Off, 2 Backhand Spring</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="beginner-running-spring" type="checkbox"  name="round_off_3_backhand_spring">Round Off, 3 Backhand Spring</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="beginner-running-spring" type="checkbox" id="checkAllRunning">Check All</label>
                        </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>Beginner Standing</legend>

                      <div class="form-group">
                        <div class="checkbox">
                          <label><input class="beginner-standing-spring" type="checkbox"  name="bhs">Basic Handstand</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="beginner-standing-spring" type="checkbox"  name="2_bhs">2 Basic Handstand</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="beginner-standing-spring" type="checkbox"  name="3_bhs">3 or More Basic Handstand</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="beginner-standing-spring" type="checkbox" id="checkAllStanding">Check All</label>
                        </div>
                    </fieldset>
                    <fieldset>
                      <legend>Advanced Running</legend>
                      <div class="form-group">
                        <div class="checkbox">
                          <label><input class="advanced-running-spring" type="checkbox"  name="bhs">Round Off, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-running-spring" type="checkbox"  name="2_bhs">Round Off, Backhand Spring, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-running-spring" type="checkbox"  name="3_bhs">Round Off, Backhand Spring, Tuck, 2x Backhand Spring, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-running-spring" type="checkbox"  name="3_bhs">Round Off, Backhand Spring, Whip</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-running-spring" type="checkbox"  name="3_bhs">Round Off, Backhand Spring, Layout</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-running-spring" type="checkbox"  name="3_bhs">Round Off, Backhand Spring, Whip, 2x Backhand Spring, Layout</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-running-spring" type="checkbox" id="checkAllStanding">Check All</label>
                        </div>
                    </fieldset>
                    <fieldset>
                      <legend>Advanced Standing</legend>
                      <div class="form-group">
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="bhs">3x Backhand Spring, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="2_bhs">2x Backhand Spring, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="3_bhs">Backhand Spring, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="3_bhs">Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="3_bhs">3x Backhand Spring, Layout</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="3_bhs">2x Backhand Spring, Layout</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="3_bhs">Backhand Spring, Layout</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox"  name="3_bhs">Tuck, 2x Backhand Spring, Layout</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="advanced-standing-spring" type="checkbox" id="checkAllAdvanceStanding">Check All</label>
                        </div>
                    </fieldset>
                    <fieldset>
                      <legend>Elite Running</legend>
                      <div class="form-group">
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox" name="2_bhs_full">Round Off, Backhand Spring, Half</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="bhs_full">Round Off, Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="full">Round Off, Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="3_bhs_double">Front Tuck, Round Off, Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="2_bhs_double">Round Off, Backhand Spring, Full and a 1/2</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="bhs_double">Round Off, Arabian, Round Off, Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="full_2_bhs_full">Round Off, Backhand Spring, Whip, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="full_3_bhs_double">Round Off, Backhand Spring, Whip, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="3_bhs_whip_full">Round Off, Arabian, Round Off, Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-running-spring" type="checkbox"  name="3_bhs_whip_double">Front Tuck, Round Off, Backhand Spring, Double</label>
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
                          <label><input class="elite-standing-spring" type="checkbox"  name="3_bhs_full">3 Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox" name="2_bhs_full">2 Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="bhs_full">Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="full">Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="3_bhs_double">3 Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="2_bhs_double">2 Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="bhs_double">Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="full_2_bhs_full">Full, 2 Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="full_3_bhs_double">Full, 3 Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="3_bhs_whip_full">3 Backhand Spring, Whip, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox"  name="3_bhs_whip_double">3 Backhand Spring, Whip, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input class="elite-standing-spring" type="checkbox" id="checkAllEliteStanding">Check All</label>
                        </div>
                      </div>
                    </fieldset>
                    <button class="btn btn-success"> Edit Beginner Skills</button>
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
                  <form class="form" method="post" action="" role="form">
                    <fieldset>
                      <legend>Beginner</legend>
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
                  <form class="form" method="post" action="" role="form">
                    <fieldset>
                      <legend>Beginner</legend>
                    </fieldset>
                    <fieldset>
                      <legend>Advanced</legend>
                    </fieldset>
                    <fieldset>
                      <legend>Elite</legend>
                    </fieldset>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$("#checkAllRunning").click(function () {
  console.log("toggle");
    $(".beginner-running-spring").prop('checked', $(this).prop('checked'));

});
</script>
@endsection
