@extends('layouts.app')

@section('content')
<form class="create-user" action="{{route('admin.users.store', )}}" method="post">
    @csrf
    @method('POST')
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
  <button type="submit" class="btn btn-secondary">Submit</button>
</form>
@endsection
