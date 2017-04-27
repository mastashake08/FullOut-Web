@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Skills</div>

                <div class="panel-body text-center">
                    <form action="{{url('/cheerleader/skills')}}" method="POST">
                      {{csrf_field()}}
                      <div class="form-group">
                        <div class="checkbox">
                          <label><input type="checkbox" value="1" name="option_1">Option 1</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" value="2" name="option_2">Option 2</label>
                        </div>
                        <div class="checkbox disabled">
                          <label><input type="checkbox" value="3" name="option_3">Option 3</label>
                        </div>
                      </div>
                      <hr>
                      <div class="form-group">
                        <div class="checkbox">
                          <label><input type="checkbox" value="" name="option_4">Option 4</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" value="" name="option_5">Option 5</label>
                        </div>
                        <div class="checkbox disabled">
                          <label><input type="checkbox" value="" name="option_6">Option 6</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="checkbox">
                          <label><input type="checkbox" value="" name="option_4">Option 4</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" value="" name="option_5">Option 5</label>
                        </div>
                        <div class="checkbox disabled">
                          <label><input type="checkbox" value="" name="option_6">Option 6</label>
                        </div>
                      </div>
                      <hr>
                      <div class="form-group">
                        <div class="checkbox">
                          <label><input type="checkbox" value="" name="option_4">Option 4</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" value="" name="option_5">Option 5</label>
                        </div>
                        <div class="checkbox disabled">
                          <label><input type="checkbox" value="" name="option_6">Option 6</label>
                        </div>
                      </div>
                      <button class="btn btn-success"> Edit Skills</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
