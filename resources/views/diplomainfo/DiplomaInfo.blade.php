@extends('layout')
@section('title','diploma')
@section('contents')



<div class="container">
    <h2>File Records</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>start</th>
                <th>Created At</th>
             
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user )
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->name }}</td>
                
                <td>{{ $user->created_at }}</td>
                
                  
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>



