<form class="form-inline" action="{{url('/cheerleader/search/schools')}}" id="search-school">
<div class="clearfix">
  <div class="form-group col-xs-6 col-sm-4 col-md-3">
    <input type="text" name="name" @if (isset($data['name']) && !empty($data['name'])) value="{{ $data['name'] }}" @endif class="form-control" id="name" placeholder="Name">
  </div>
  <div class="form-group col-xs-6 col-sm-4 col-md-3">
    <input type="number" name="min_gpa" @if (isset($data['min_gpa']) && !empty($data['min_gpa'])) value="{{ $data['min_gpa'] }}" @endif class="form-control" id="min_gpa" placeholder="GPA">
  </div>
  <div class="form-group col-xs-6 col-sm-4 col-md-3">
    <input type="number" name="act" @if (isset($data['act']) && !empty($data['act'])) value="{{ $data['act'] }}" @endif class="form-control" id="act" placeholder="ACT">
  </div>
  <div class="form-group col-xs-6 col-sm-4 col-md-3">
    <input type="number" name="sat" @if (isset($data['sat']) && !empty($data['sat'])) value="{{ $data['sat'] }}" @endif class="form-control" id="sat" placeholder="SAT">
  </div>
  <div class="form-group col-xs-6 col-sm-4 col-md-3">
    <select class="selectpicker" multiple="multiple" name="most_winning[]" id="most_winning" title="Most Winning">
      <option value="UCA" @if (isset($data['most_winning']) && !empty($data['most_winning']) && in_array('UCA', $data['most_winning'])) selected="selected" @endif>UCA</option>
      <option value="NCA"  @if (isset($data['most_winning']) && !empty($data['most_winning']) && in_array('NCA', $data['most_winning'])) selected="selected" @endif>NCA</option>
      <option value="World"  @if (isset($data['most_winning']) && !empty($data['most_winning']) && in_array('World', $data['most_winning'])) selected="selected" @endif>World</option>
      <option value="Other"  @if (isset($data['most_winning']) && !empty($data['most_winning']) && in_array('Other', $data['most_winning'])) selected="selected" @endif>Other</option>
    </select>
  </div>
  <div class="form-group col-xs-6 col-sm-4 col-md-3">
    <input type="checkbox" class="form-control d-none" name="most_scholarship" @if (isset($data['most_scholarship']) && !empty($data['most_scholarship'])) checked="checked" @endif  id="most_scholarship" autocomplete="off"/>
    <div class="btn-group">
          <label for="most_scholarship" class="btn btn-default">
            <span class="glyphicon glyphicon-ok"></span>
            <span> </span>
          </label>
          <label for="most_scholarship" class="btn btn-default active btn-checkbox">
            Most Scholarship
          </label>
    </div>
  </div>
  <div class="form-group col-xs-6 col-sm-4 col-md-3">
    <input type="checkbox" class="form-control d-none" name="tuition_cost" @if (isset($data['tuition_cost']) && !empty($data['tuition_cost'])) checked="checked" @endif id="tuition_cost" autocomplete="off"/>
    <div class="btn-group">
      <label for="tuition_cost" class="btn btn-default">
        <span class="glyphicon glyphicon-ok"></span>
        <span> </span>
      </label>
      <label for="tuition_cost" class="btn btn-default active btn-checkbox">
        Tuition Cost
      </label>
    </div>
  </div>
  <div class="form-group col-xs-6 col-sm-4 col-md-3">
    <select class="selectpicker" name="perfect_fit" id="perfect_fit" title="Perfect Fit">
      {{--<option value="gpa" @if (isset($data['perfect_fit']) && !empty($data['perfect_fit']) && in_array('gpa', $data['perfect_fit'])) selected="selected" @endif>G.P.A.</option>--}}
      <option value="gpa" @if (isset($data['perfect_fit']) && !empty($data['perfect_fit']) && $data['perfect_fit'] == 'gpa') selected="selected" @endif>G.P.A.</option>
      {{--<option value="act" @if (isset($data['perfect_fit']) && !empty($data['perfect_fit']) && in_array('act', $data['perfect_fit'])) selected="selected" @endif>ACT</option>--}}
      <option value="act" @if (isset($data['perfect_fit']) && !empty($data['perfect_fit']) && $data['perfect_fit'] == 'act') selected="selected" @endif>ACT</option>
      {{--<option value="sat" @if (isset($data['perfect_fit']) && !empty($data['perfect_fit']) && in_array('sat', $data['perfect_fit'])) selected="selected" @endif>SAT</option>--}}
      <option value="sat" @if (isset($data['perfect_fit']) && !empty($data['perfect_fit']) && $data['perfect_fit'] == 'sat') selected="selected" @endif>SAT</option>
    </select>
  </div>
  <div class="form-group col-xs-12 col-sm-4 col-md-3">
    <select class="selectpicker" name="skills" id="skills" title="Skills">
      <option value="lowest-to-highest" @if (isset($data['skills']) && !empty($data['skills']) && $data['skills'] == 'lowest-to-highest') selected="selected" @endif>Lowest to Highest</option>
      <option value="highest-to-lowest" @if (isset($data['skills']) && !empty($data['skills']) && $data['skills'] == 'highest-to-lowest') selected="selected" @endif>Highest to Lowest</option>
    </select>
  </div>
</div>
  <button type="submit" class="btn btn-default btn-sm">Search</button>
</form>
