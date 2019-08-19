@extends('../student_app/layout')

@section('content')

<br>

@if(session()->has('success'))

	{{ session()->get('success') }}

@endif

<div class="card">
  <div class="card-header">
    Add Student Detail
  </div>
  <div class="card-body" style="width: 400px">
    	<form method="post" action="{{ url('student') }}">

			{{ csrf_field() }}

			  <div class="form-group">
			    <label for="name">Student Name</label>
			    <input type="name" class="form-control" id="name" placeholder="Enter name" name="std_name">
			  </div>
			  <div class="form-group">
			    <label for="roll">Student Roll No</label>
			    <input type="number" class="form-control" id="roll" placeholder="Student Roll No" name="std_roll">
			  </div>
			  <div class="form-group">
			    <label for="email">Student Email</label>
			    <input type="email" class="form-control" id="email" placeholder="Student Email id" name="std_email">
			  </div>
			  <div class="form-group">
			    <label for="address">Student Address</label>
			    <textarea class="form-control" id="address" name="std_address"></textarea>
			  </div>
			  <button type="submit" class="btn btn-primary">Save</button>
		</form>
  </div>
</div>

@endsection