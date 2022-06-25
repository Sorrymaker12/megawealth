@extends('layouts.error')

@section('title', 'Error 403')

@section('content')
    <div class="d-flex justify-content-center mt-4">
        <div class="alert alert-danger" role="alert" style="text-align: center">
            <h1>403 Forbidden</h1>
            <p>You are not allowed to access this page.</p>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <a type="button" class="btn btn-primary" href="/view/home">Back To Home</a>
    </div>
@endsection
