@extends('layout')

@section('title', 'Profile Management')

@section('content')
<div class="container">
    <h1 class="mb-0">Profile Management</h1>
    <hr />
    <div class="mb-3">
        <a href="{{ route('profile.create') }}" class="btn btn-primary">Create New Profile</a>
        <a href="{{ route('Dashboard') }}" class="btn btn-primary">Dashboard</a>
        <a href="{{ route('profile.index') }}" class="btn btn-primary">refersh</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>AFM</th>
                <th>Location</th>
                <th>Age</th>
                <th>Actions</th>
                <th>categories</th>
                <th>start</th>
                <th>end</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($profiles as $profile)
                <tr>
                    <td>{{ $profile->id }}</td>
                    <td>{{ $profile->FirstName }}</td>
                    <td>{{ $profile->LastName }}</td>
                    <td>{{ $profile->phone }}</td>
                    <td>{{ $profile->afm }}</td>
                    <td>{{ $profile->location }}</td>
                    <td>{{ $profile->age }}</td>
                    <td>
                        <a href="{{ route('profile.edit', $profile->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('profile.delete', $profile->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    <td>
                        <u>
                            @foreach ($categories as $cat)
                                
                                    <ul>{{ $cat->name }}</ul>
                                    <td>{{ $cat->start }}</td>
                                    <td>{{ $cat->end}}</td>
                                
                            @endforeach
                        </u>
                    </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
@endsection
