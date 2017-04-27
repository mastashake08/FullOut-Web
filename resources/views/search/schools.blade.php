<form class="form-inline" action="{{url('/cheerleader/search/school')}}">
  <div class="form-group">
    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
  </div>
  <div class="form-group">
    <input type="text" name="min_gpa" class="form-control" id="min_gpa" placeholder="GPA">
  </div>
  <div class="form-group">
    <input type="text" name="act" class="form-control" id="act" placeholder="ACT">
  </div>
  <div class="form-group">
    <input type="text" name="sat" class="form-control" id="sat" placeholder="SAT">
  </div>
  <button type="submit" class="btn btn-default btn-sm">Search</button>
</form>
