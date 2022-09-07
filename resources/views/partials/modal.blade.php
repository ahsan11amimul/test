<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New People</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <form action="{{url('/add_people')}}" method="post">
      @csrf
  <div class="mb-1">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror
 </div>
  <div class="mb-1">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
    @error('email')
        <span class="text-danger">{{$message}}</span>
    @enderror
 </div>
  <div class="mb-1">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone')}}">
    @error('phone')
        <span class="text-danger">{{$message}}</span>
    @enderror
 </div>
  <div class="mb-1">
    <label for="designation" class="form-label">Designation</label>
    <input type="text" class="form-control" id="designation" name="designation" value="{{old('designation')}}">
    @error('designation')
        <span class="text-danger">{{$message}}</span>
    @enderror
 </div>
  <div class="mb-1">
    <label for="department_id" class="form-label">Department</label>
    <select name="department_id" id="department_id" class="form-control">
        @foreach ($departments as $item)
            <option value="{{$item->id}}" class="form-control">{{$item->name}}</option>
        @endforeach
    </select>
 </div>
<div class="mb-1">
    <label for="hall_id" class="form-label">Hall</label>
    <select name="hall_id" id="hall_id" class="form-control">
        @foreach ($halls as $item)
            <option value="{{$item->id}}" class="form-control">{{$item->name}}</option>
        @endforeach
    </select>
 </div>
  <button type="submit" class="btn btn-primary w-100">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>