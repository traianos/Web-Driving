@extends('layout')
@section('title', 'Update Event')
@section('content')
<div class="container">
    <h1>Update Event</h1>
    <form method="post" action="{{ route('update-event')}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $event->title }}" required>
        </div>
        <div class="form-group">
            <label for="start">Start Date and Time:</label>
            <input type="datetime-local" class="form-control" id="start" name="start" value="{{ date('Y-m-d\TH:i', strtotime($event->start)) }}" required>
        </div>
        <div class="form-group">
            <label for="end">End Date and Time:</label>
            <input type="datetime-local" class="form-control" id="end" name="end" value="{{ date('Y-m-d\TH:i', strtotime($event->end)) }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ $event->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Event</button>
    </form>
</div>
@endsection
