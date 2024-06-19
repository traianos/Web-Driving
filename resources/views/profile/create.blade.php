@extends('layout')

@section('title', 'Create Profile')

@section('content')
    <h1 class="mb-0">Create Profile </h1>
    <hr />

    <form action="{{ route('profile.post') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">First Name</label>
                <input type="text" name="FirstName" class="form-control" placeholder="First Name" value="{{ old('FirstName') }}" required>
            </div>
            <div class="col mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" name="LastName" class="form-control" placeholder="Last Name" value="{{ old('LastName') }}" required>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}" required>
            </div>
            <div class="col mb-3">
                <label class="form-label">AFM</label>
                <input type="text" name="afm" class="form-control" placeholder="AFM" value="{{ old('afm') }}" required>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Location</label>
                <select id="location" name="location" class="form-control" required>
                    @foreach($greeceLocations as $location)
                        <option value="{{ $location }}">{{ $location }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col mb-3">
                <label class="form-label">Age</label>
                <input type="number" name="age" class="form-control" placeholder="Age" value="{{ old('age') }}" required>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-success">Create</button>
            </div>
        </div>
    </form>
@endsection
