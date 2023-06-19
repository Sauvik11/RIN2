@extends('layouts.mainlayout')
@section('content')
<div class="container">
    
<div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-6">
        <div class="d-grid gap-3">
          <a href="{{ route('users.userList') }}" class="btn btn-success btn-lg">Go to Users</a>
          <a href="{{ route('notifications.create') }}" class="btn btn-success btn-lg">Create Notifications</a>
          <a href="{{ route('notifications.list') }}" class="btn btn-success btn-lg">All Notifications</a>
        </div>
      </div>
    </div>
</div>
</div>
@endsection