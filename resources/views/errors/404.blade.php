@extends('layouts.error')

@section('title', 'Error 404')

@section('content')
    <div class="d-flex justify-content-center mt-4">
        <div class="alert alert-danger" role="alert" style="text-align: center">
            <h1>404 Not Found</h1>
            <p>The page you are looking for does not exist.</p>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <a type="button" class="btn btn-primary" href="/view/home">Back To Home</a>
    </div>
@endsection
