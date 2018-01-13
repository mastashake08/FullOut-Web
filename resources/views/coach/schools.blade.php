{{--{{ dd($errors) }}--}}
<div class="container">
    {{--{{ dd(auth()->user()->school) }}--}}
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Manage School</div>

                <div class="panel-body">
                  <form class="form" role="form" action="{{url('/coach/schools')}}" method="post" enctype="multipart/form-data">
                      {!!csrf_field()!!}
                  @if(auth()->user()->school != null)

                          <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
                              <div class="col-md-12 mb-2">
                                  <div class="input-group">
                                      <span class="input-group-addon">Upload school logo</span>
                                      <img id="school_logo_img" src="{{ asset('images/school-logo/'.(auth()->user()->school->logo ? auth()->user()->school->logo : "")) }}" alt=""/>
                                      <input id="school_logo_pic" type="file" class="form-control w-75" name="logo">
                                  </div>
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-12">
                              <div class="input-group">
                                  <span class="input-group-addon">School / Gym Name</span>
                                  <input type="text" class="form-control" placeholder="School / Gym Name" name="name" required value="{{(auth()->user()->school->name ? auth()->user()->school->name : "")}}">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-6">
                              <div class="input-group">
                                  <span class="input-group-addon">Office Phone</span>
                                  <input type="text" class="form-control" placeholder="" name="office_phone" required value="{{(auth()->user()->school->office_phone ? auth()->user()->school->office_phone : "")}}">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-6">
                              <div class="input-group">
                                  <span class="input-group-addon">Cell  Phone</span>
                                  <input type="text" class="form-control" placeholder="Cell Number" name="cell_phone" required value="{{(auth()->user()->school->cell_phone ? auth()->user()->school->cell_phone : "")}}">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-6">
                              <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">Office Address</span>
                                  <input type="text" class="form-control" placeholder="Office Address" name="office_address" required value="{{(auth()->user()->school->office_address ? auth()->user()->school->office_address : "")}}" aria-describedby="basic-addon1">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-6">
                              <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">In State Tuition</span>
                                  <input type="text" class="form-control" placeholder="" name="in_state_tuition" required value="{{(auth()->user()->school->in_state_tuition ? auth()->user()->school->in_state_tuition : "")}}" aria-describedby="basic-addon1">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-6">
                              <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">Out Of State Tuition</span>
                                  <input type="text" class="form-control" placeholder="" name="out_state_tuition" required value="{{(auth()->user()->school->out_state_tuition ? auth()->user()->school->out_state_tuition : "")}}" aria-describedby="basic-addon1">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-6">
                              <div class="input-group">
                                  <span class="input-group-addon">D.O.B.</span>
                                  <input type="text" class="form-control" placeholder="D.O.B." name="dob" required value="{{(auth()->user()->school->dob ? auth()->user()->school->dob : "")}}">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>

                          <div class="col-xs-12"><h2>Academic Requirement</h2></div>

                          <div class="form-group col-md-12">
                              <div class="input-group">
                                  <span class="input-group-addon">GPA Requirement to get in the school/gym</span>
                                  <input type="text" class="form-control" placeholder="" name="min_gpa" required value="{{(auth()->user()->school->min_gpa ? auth()->user()->school->min_gpa : "")}}">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-12">
                              <div class="input-group">
                                  <span class="input-group-addon">GPA Requirement to stay on the team</span>
                                  <input type="text" class="form-control" placeholder="" name="gpa_needed_for_team" required value="{{(auth()->user()->school->gpa_needed_for_team ? auth()->user()->school->gpa_needed_for_team : "")}}">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-12">
                              <div class="input-group">
                                  <span class="input-group-addon">GPA Requirements for Transfers</span>
                                  <input type="text" class="form-control" placeholder="GPA Requirements for Transfers" name="min_gpa_transfer" required value="{{(auth()->user()->school->min_gpa_transfer ? auth()->user()->school->min_gpa_transfer : "")}}">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-12">
                              <div class="input-group">
                                  <span class="input-group-addon">ACT Score Requirement</span>
                                  <input type="text" class="form-control" placeholder="" name="act_score" required value="{{(auth()->user()->school->act_score ? auth()->user()->school->act_score : "")}}">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-12">
                              <div class="input-group">
                                  <span class="input-group-addon">SAT Score Requirement</span>
                                  <input type="text" class="form-control" placeholder="" name="sat_score" required value="{{(auth()->user()->school->sat_score ? auth()->user()->school->sat_score : "")}}">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-12">
                              <div class="input-group">
                                  <span class="input-group-addon">Do you offer Scholarship?</span>
                                  <label for="scholarship_text" class="form-control overflow-hidden">
                                      <label for="scholarship">If yes, Check here</label>
                                      <input id="scholarship" type="checkbox" class="" name="offer_scholarship" value="yes" @if(auth()->user()->school && auth()->user()->school->offer_scholarship == 'yes') checked @endif>
                                      And explain with detail
                                  </label>
                                  <textarea id="scholarship_text" class="form-control" name="scholarship_text">{{ (auth()->user()->school ? auth()->user()->school->scholarship_text : "" ) }}</textarea>
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-12">
                              <div class="input-group">
                                  <span class="team_wins d-block w-100">Team Wins</span>
                                  <div class="row">
                                      <div class="col-md-3">
                                          <label for="wins_uca">Wins UCA</label>
                                          <input type="number" id="wins_uca" class="w-25" placeholder="" name="wins_uca" required value="{{(auth()->user()->school->wins_uca ? auth()->user()->school->wins_uca : "")}}">
                                          @if ($errors->has('number_members'))
                                              <span class="help-block">
                                                 <strong>{{ $errors->first('wins_uca') }}</strong>
                                            </span>
                                          @endif
                                      </div>
                                      <div class="col-md-3">
                                          <label for="wins_nca">Wins NCA</label>
                                          <input type="number" id="wins_nca" class="w-25" placeholder="" name="wins_nca" required value="{{(auth()->user()->school->wins_nca ? auth()->user()->school->wins_nca : "")}}">
                                          @if ($errors->has('number_members'))
                                              <span class="help-block">
                                                 <strong>{{ $errors->first('wins_nca') }}</strong>
                                            </span>
                                          @endif
                                      </div>
                                      <div class="col-md-3">
                                          <label for="wins_worlds">Wins Worlds</label>
                                          <input type="number" id="wins_worlds" class="w-25" placeholder="" name="wins_worlds" required value="{{(auth()->user()->school->wins_worlds ? auth()->user()->school->wins_worlds : "")}}">
                                          @if ($errors->has('number_members'))
                                              <span class="help-block">
                                                 <strong>{{ $errors->first('wins_worlds') }}</strong>
                                            </span>
                                          @endif
                                      </div>
                                      <div class="col-md-3">
                                          <label for="wins_other">Other Wins</label>
                                          <input type="number" id="wins_other" class="w-25" placeholder="" name="wins_other" required value="{{(auth()->user()->school->wins_other ? auth()->user()->school->wins_other : "")}}">
                                          @if ($errors->has('number_members'))
                                              <span class="help-block">
                                                 <strong>{{ $errors->first('wins_other') }}</strong>
                                            </span>
                                          @endif
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="form-group col-md-12">
                              <div class="input-group">
                                  <span class="input-group-addon">Number of hours that must be taken every semester to stay on the team</span>
                                  <input type="number" class="form-control" placeholder="Number" name="number_hours" required value="{{(auth()->user()->school->number_hours ? auth()->user()->school->number_hours : "")}}">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-12">
                              <div class="input-group">
                                  <span class="input-group-addon">Other Testing</span>
                                  <input type="text" class="form-control" placeholder="Other Testing" name="other_testing" required value="{{(auth()->user()->school->other_testing ? auth()->user()->school->other_testing : "")}}">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-12">
                              <div class="input-group">
                                  <span class="input-group-addon">Brief description of School</span>
                                  <textarea class="form-control" name="description">{{(auth()->user()->school->description ? auth()->user()->school->description : "")}}</textarea>
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-12">
                              <div class="input-group">
                                  <span class="input-group-addon">Popular Scholarship of your team or school that is given outside your program</span>
                                  <input type="text" class="form-control" placeholder="" name="popular_scholarship_outside_program" required value="{{(auth()->user()->school->popular_scholarship_outside_program ? auth()->user()->school->popular_scholarship_outside_program : "")}}">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-12">
                              <div class="input-group">
                                  <span class="input-group-addon">Link to website</span>
                                  <input type="text" class="form-control" placeholder="" name="website" required value="{{(auth()->user()->school->website ? auth()->user()->school->website : "")}}">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                    {{--<input class="form-control"  name="name" placeholder="School Name" value="{{auth()->user()->school->name}}" readonly="true"/>--}}
                    {{--<label for="logo">Logo</label>--}}
                    {{--<input type="file" name="logo" id="logo">--}}

                    {{--<img src="{{(auth()->user()->school->logo)}}"/>--}}
                    {{--<textarea class="form-control" name="description" placeholder="School Description">{{auth()->user()->school->name}}</textarea>--}}
                    {{--<input class="form-control" name="office_phone" type="tel" placeholder="Office Phone" value="{{auth()->user()->school->office_phone}}">--}}
                    {{--<input class="form-control" name="cell_phone" type="tel" placeholder="Cell Phone" value="{{auth()->user()->school->cell_phone}}">--}}
                    {{--<textarea class="form-control" name="address"  placeholder="School Address">{{auth()->user()->school->office_address}}</textarea>--}}
                    {{--<input class="form-control" name="in_state_tuition" placeholder="In State Tuition" value="{{auth()->user()->school->in_state_tuition}}">--}}
                    {{--<input class="form-control" name="out_state_tuition" placeholder="Out Of State Tuition" value="{{auth()->user()->school->out_state_tuition}}">--}}

                    {{--<input class="form-control" name="website" placeholder="Website" value="{{auth()->user()->school->website}}">--}}

                    {{--<input class="form-control" name="min_gpa" placeholder="Min GPA" value="{{auth()->user()->school->min_gpa}}">--}}
                    {{--<input class="form-control" name="min_gpa_transfer" placeholder="Min GPA Transfer" value="{{auth()->user()->school->min_gpa_transfer}}">--}}
                    {{--<input class="form-control" name="gpa_needed_for_team" placeholder="GPA Needed For Team" value="{{auth()->user()->school->gpa_needed_for_team}}">--}}
                    {{--<input class="form-control" name="act_score" placeholder="ACT Needed" value="{{auth()->user()->school->act_score}}">--}}
                    {{--<input class="form-control" name="sat_score" placeholder="SAT Needed" value="{{auth()->user()->school->sat_score}}">--}}
                  @else
                          <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
                              <div class="col-md-12 mb-2">
                                  <div class="input-group">
                                      <span class="input-group-addon">Upload school logo</span>
                                      <img id="school_logo_img" src="" alt=""/>
                                      <input id="school_logo_pic" type="file" class="form-control w-75" name="logo">
                                  </div>
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-12">
                              <div class="input-group">
                                  <span class="input-group-addon">School / Gym Name</span>
                                  <input type="text" class="form-control" placeholder="School / Gym Name" name="name" required value="{{old('name')}}">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-6">
                              <div class="input-group">
                                  <span class="input-group-addon">Office Phone</span>
                                  <input type="text" class="form-control" placeholder="" name="office_phone" required value="{{old('office_phone')}}">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-6">
                              <div class="input-group">
                                  <span class="input-group-addon">Cell  Phone</span>
                                  <input type="text" class="form-control" placeholder="Cell Number" name="cell_phone" required value="{{old('cell_phone')}}">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-6">
                              <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">Office Address</span>
                                  <input type="text" class="form-control" placeholder="Office Address" name="office_address" required value="{{old('office_address')}}" aria-describedby="basic-addon1">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-6">
                              <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">In State Tuition</span>
                                  <input type="text" class="form-control" placeholder="" name="in_state_tuition" required value="{{old('in_state_tuition')}}" aria-describedby="basic-addon1">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-6">
                              <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">Out Of State Tuition</span>
                                  <input type="text" class="form-control" placeholder="" name="out_state_tuition" required value="{{old('out_state_tuition')}}" aria-describedby="basic-addon1">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-6">
                              <div class="input-group">
                                  <span class="input-group-addon">D.O.B.</span>
                                  <input type="text" class="form-control" placeholder="D.O.B." name="dob" required value="{{old('dob')}}">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>

                          <div class="col-xs-12"><h2>Academic Requirement</h2></div>

                          <div class="form-group col-md-12">
                              <div class="input-group">
                                  <span class="input-group-addon">GPA Requirement to get in the school/gym</span>
                                  <input type="text" class="form-control" placeholder="" name="min_gpa" required value="{{old('min_gpa')}}">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-12">
                              <div class="input-group">
                                  <span class="input-group-addon">GPA Requirement to stay on the team</span>
                                  <input type="text" class="form-control" placeholder="" name="gpa_needed_for_team" required value="{{old('gpa_needed_for_team')}}">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-12">
                              <div class="input-group">
                                  <span class="input-group-addon">GPA Requirements for Transfers</span>
                                  <input type="text" class="form-control" placeholder="GPA Requirements for Transfers" name="min_gpa_transfer" required value="{{old('min_gpa_transfer')}}">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-12">
                              <div class="input-group">
                                  <span class="input-group-addon">ACT Score Requirement</span>
                                  <input type="text" class="form-control" placeholder="" name="act_score" required value="{{old('act_score')}}">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-12">
                              <div class="input-group">
                                  <span class="input-group-addon">SAT Score Requirement</span>
                                  <input type="text" class="form-control" placeholder="" name="sat_score" required value="{{old('sat_score')}}">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-12">
                              <div class="input-group">
                                  <span class="input-group-addon">Do you offer Scholarship?</span>
                                  <label for="scholarship_text" class="form-control overflow-hidden">
                                      <label for="scholarship">If yes, Check here</label>
                                      <input id="scholarship" type="checkbox" class="" name="offer_scholarship" value="yes">
                                      And explain with detail
                                  </label>
                                  <textarea id="scholarship_text" class="form-control" name="scholarship_text">{{old('scholarship_text')}}</textarea>
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-12">
                              <div class="input-group">
                                  <span class="team_wins d-block w-100">Team Wins</span>
                                  <div class="row">
                                      <div class="col-md-3">
                                          <label for="wins_uca">Wins UCA</label>
                                          <input type="number" id="wins_uca" class="w-25" placeholder="" name="wins_uca" required value="{{old('wins_uca')}}">
                                          @if ($errors->has('number_members'))
                                              <span class="help-block">
                                                 <strong>{{ $errors->first('wins_uca') }}</strong>
                                            </span>
                                          @endif
                                      </div>
                                      <div class="col-md-3">
                                          <label for="wins_nca">Wins NCA</label>
                                          <input type="number" id="wins_nca" class="w-25" placeholder="" name="wins_nca" required value="{{old('wins_nca')}}">
                                          @if ($errors->has('number_members'))
                                              <span class="help-block">
                                                 <strong>{{ $errors->first('wins_nca') }}</strong>
                                            </span>
                                          @endif
                                      </div>
                                      <div class="col-md-3">
                                          <label for="wins_worlds">Wins Worlds</label>
                                          <input type="number" id="wins_worlds" class="w-25" placeholder="" name="wins_worlds" required value="{{old('wins_worlds')}}">
                                          @if ($errors->has('number_members'))
                                              <span class="help-block">
                                                 <strong>{{ $errors->first('wins_worlds') }}</strong>
                                            </span>
                                          @endif
                                      </div>
                                      <div class="col-md-3">
                                          <label for="wins_other">Other Wins</label>
                                          <input type="number" id="wins_other" class="w-25" placeholder="" name="wins_other" required value="{{old('wins_other')}}">
                                          @if ($errors->has('number_members'))
                                              <span class="help-block">
                                                 <strong>{{ $errors->first('wins_other') }}</strong>
                                            </span>
                                          @endif
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="form-group col-md-12">
                              <div class="input-group">
                                  <span class="input-group-addon">Number of hours that must be taken every semester to stay on the team</span>
                                  <input type="number" class="form-control" placeholder="Number" name="number_hours" required value="{{old('number_hours')}}">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-12">
                              <div class="input-group">
                                  <span class="input-group-addon">Other Testing</span>
                                  <input type="text" class="form-control" placeholder="Other Testing" name="other_testing" required value="{{old('other_testing')}}">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-12">
                              <div class="input-group">
                                  <span class="input-group-addon">Brief description of School</span>
                                  <textarea class="form-control" name="description">{{old('description')}}</textarea>
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-12">
                              <div class="input-group">
                                  <span class="input-group-addon">Popular Scholarship of your team or school that is given outside your program</span>
                                  <input type="text" class="form-control" placeholder="" name="popular_scholarship_outside_program" required value="{{old('popular_scholarship_outside_program')}}">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-12">
                              <div class="input-group">
                                  <span class="input-group-addon">Link to website</span>
                                  <input type="text" class="form-control" placeholder="" name="website" required value="{{old('website')}}">
                              </div>
                              @if ($errors->has('logo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                              @endif
                          </div>
                  @endif
                  <button type="submit" class="btn btn-primary"><i class="fa fa-university" aria-hidden="true"></i> Update School</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
