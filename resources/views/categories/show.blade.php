@extends('layout')
@section('title', 'Detail')  
@section('content')
    <h1 class="mb-0">Detail User And Categories </h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">ID </label>
            <input type="text" name="title" class="form-control" placeholder="ID" value="" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="price" class="form-control" placeholder="Name" value="" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="product_code" class="form-control" placeholder="Email" value="" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description Categories</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="" readonly>
        </div>
    </div>
@endsection