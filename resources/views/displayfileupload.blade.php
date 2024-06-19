@extends('layout')
@section('title', 'Displayfileuploads')
@section('content')

<div class="container">
    <h2>File Records</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Size</th>
                <th>Created At</th>
                <th>Action</th> <!-- New column for download button -->
            </tr>
        </thead>
        <tbody>
            @foreach($files as $file)
                <tr>
                    <td>{{ $file->id }}</td>
                    <td>{{ $file->file }}</td>
                    <td>{{ $file->size }}</td>
                    <td>{{ $file->created_at }}</td>
                    <td>
                        <a href="{{ route('file.download', ['id' => $file->id]) }}" class="btn btn-primary">Download</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
