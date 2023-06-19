

@extends('layouts.mainlayout')

@section('content')

<div class="container py-4">

  <form action="{{ route('notifications.store') }}" method="POST">
  @csrf
  
    <div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-lg-9">
      <h4 class="mb-3">Create Notification</h4>
      <form>
        <div class="row g-3">
          <div class="col-md-3">
            <label for="your-name" class="form-label">Type</label>
            <select class="form-select"  name="type" id="type">
            <option value="marketing">Marketing</option>
            <option value="invoices">Invoices</option>
            <option value="system">System</option>
        </select>
          </div>
          <div class="col-md-3">
            <label for="your-email" class="form-label">Expiration Date:</label>
            <div class="input-group">
              <input id="expiration" name="expiration" class="form-control form-control-sm datepicker" type="date" placeholder="Expiration Date"/>
              <div class="input-group-append">
               
              </div>
            </div>

            
          </div>
          </div>
          <div class="row g-3">
          <div class="col-md-6">
          <label  class="form-label" for="destination">Destination:</label>
          <select class="select2-multiple form-control"  multiple data-live-search="true" name="destination[]" multiple="multiple" id="destination">
          <option value="all">All Users</option>
          @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach            
              </select>
          </div>
          <div class="row g-3">
          <div class="col-md-3">
        
            <label for="your-surname" class="form-label">Short Text:</label>
            <textarea  class="form-control" name="text" id="text" cols="30" rows="10"></textarea>
          </div>
          
          <div class="col-12">
            <div class="row">
              <div class="col-md-6">
              <button type="submit" class="btn btn-success">Post Notification</button>
              </div>
            </div>
          </div>
          </div>
         
          
          </div>
        </div>
      </form>
    </div>
  </div>
</div>



@endsection










<!-- <form action="{{ route('notifications.store') }}" method="POST">
    @csrf
    <div>
        <label for="type">Type:</label>
        <select name="type" id="type">
            <option value="marketing">Marketing</option>
            <option value="invoices">Invoices</option>
            <option value="system">System</option>
        </select>
    </div>
    <div>
        <label for="text">Short Text:</label>
        <textarea name="text" id="text" cols="30" rows="10"></textarea>
    </div>
    <div>
        <label for="expiration">Expiration Date:</label>
        <input type="date" name="expiration" id="expiration">
    </div>
    <div>
        <label for="destination">Destination:</label>
        <select name="destination" id="destination">
            <option value="all">All Users</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <button type="submit">Post Notification</button>
    </div>
</form> --> 
