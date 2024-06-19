@extends('layout')

@section('title', 'Edit Profile')

@section('content')
    <h1 class="mb-0">Edit Profile</h1>
    <hr />
    
    <form action="{{ route('profile.update', $profile->id) }}" method="POST">
        @csrf
        @method('PUT')
    
        <div class="form-group">
            <label for="FirstName">First Name:</label>
            <input type="text" class="form-control" id="FirstName" name="FirstName" value="{{ $profile->FirstName }}">
        </div>
    
        <div class="form-group">
            <label for="LastName">Last Name:</label>
            <input type="text" class="form-control" id="LastName" name="LastName" value="{{ $profile->LastName }}">
        </div>
    
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $profile->phone }}">
        </div>
    
        <div class="form-group">
            <label for="afm">AFM:</label>
            <input type="text" class="form-control" id="afm" name="afm" value="{{ $profile->afm }}">
        </div>
    
        <div class="form-group">
            <label for="location">Location:</label>
            <select class="form-control" id="location" name="location">
                @foreach($greeceLocations as $location)
                    <option value="{{ $location }}" {{ $profile->location == $location ? 'selected' : '' }}>{{ $location }}</option>
                @endforeach
            </select>
        </div>
    
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" class="form-control" id="age" name="age" value="{{ $profile->age }}">
        </div>
    
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    
@endsection
