@extends('layout')
@section('title','Ερωτησεις πολλαπλης')
@section('content')
<div class="container">
    <h1>Ερωτησεις πολλαπλης</h1>
    <a href="{{ route('Dashboard') }}" class="btn btn-primary">(επιστροφη στο menu)</a>
    <form action="{{ route('submitQuiz') }}" method="POST">
        @csrf
        @foreach($questions as $question)
            <div class="form-group">
                <label>{{ $question->question }}</label>
                @foreach(json_decode($question->options) as $option)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]" value="{{ $option }}">
                        <label class="form-check-label">{{ $option }}</label>
                    </div>
                @endforeach
            </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Υποβολή</button>
    </form>
</div>
@endsection
