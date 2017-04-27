<form class="form-inline" action="{{url('/cheerleader/search/school')}}">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="min_gpa">GPA:</label>
    <input type="text" name="min_gpa" class="form-control" id="min_gpa">
  </div>
  <div class="form-group">
    <label for="act">ACT:</label>
    <input type="text" name="act" class="form-control" id="act">
  </div>
  <div class="form-group">
    <label for="sat">SAT:</label>
    <input type="text" name="sat" class="form-control" id="sat">
  </div>
  <button type="submit" class="btn btn-default">Search</button>
</form>
