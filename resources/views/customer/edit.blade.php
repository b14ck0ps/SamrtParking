@extends('layouts.app')
@section('content')
    <div class="container h-100 mt-5">
        <h3 class="text-center m-3">Edit Profile</h3>
        <div class="row h-100 justify-content-center align-items-center card p-5">
            <form class="col-6" method="POST" action="/update">
                @csrf
                <div class="form-group">
                    <label for="inputEmail">Name</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="Name" name="name"
                        value="{{ $user->name }}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputEmail">Vehical Name</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="Vehical Name"
                        name="vehicle_name" value="{{ $user->vehicle_name }}">
                    @error('vehicle_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputEmail">Phone</label>
                    <input type="number" class="form-control" id="inputEmail" placeholder="Phone" name="phone"
                        value="{{ $user->phone }}">
                    @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email"
                        value="{{ $user->email }}">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputPassword">Confirm Password</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Confirm Password"
                        name="password_confirmation">
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
