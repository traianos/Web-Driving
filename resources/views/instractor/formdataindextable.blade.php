@extends('layout')
@section('title', 'Displayfordata')
@section('content')

<div class="container">
    <h2> DataFormRecords</h2>
    <a href="{{ route('Dashboardinstractor') }}"  class="btn btn-primary">back</a>
    <a href="{{ route('getfromdataindex') }}"  class="btn btn-primary">refresh</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>firstName</th>
                <th>lastname</th>
                <th>start</th>
                <th>categories</th>
                <th>description</th> 
            </tr>
        </thead>
        <tbody>
            @foreach($dataformget as $dtget )
                <tr>
                    <td>{{ $dtget->id }}</td>
                    <td>{{ $dtget->fn }}</td>
                    <td>{{ $dtget->LastName}}</td>
                    <td>{{ $dtget->start }}</td>
                    <td>{{ $dtget->ct }}</td>
                    <td>{{ $dtget->desc }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
       
       </div>
</div>
@endsection
