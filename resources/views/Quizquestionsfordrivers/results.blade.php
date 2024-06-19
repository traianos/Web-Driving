@extends('layout')
@section('title','απαντησεις')
@section('content')



<div class="container">
    <h1>Αποτέλεσμα ερωτησεων  Οδήγησης</h1>
    <p>Το σκορ σας: {{ $score }}</p>
    <a href="{{ route('quizindexblade') }}" class="btn btn-primary">Κάνε click για άλλη δοκιμή</a>
</div>


@endsection
