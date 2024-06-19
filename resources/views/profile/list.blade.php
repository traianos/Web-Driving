@extends('layout')

@section('content')
<div class="container">
    
    <hr />
    <div class="mb-3">
        <a href="{{ route('profile.create') }}" class="btn btn-primary">Create New Profil </a>
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
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
