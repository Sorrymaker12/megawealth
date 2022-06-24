@extends('auth.authtemplate')

@section('title', 'Register')

@section('content')
    <div class="container-fluid d-flex justify-container-center pt-5">
        <div class="container " style="width: 800px">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <!-- Name input -->
                <h1 class="h1 text-center mb-5">Register</h1>
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example1">Name</label>
                    <input type="text" name="name" id="form2Example1" class="form-control" />
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example1">Email address</label>
                    <input type="email" name="email" id="form2Example1" class="form-control" />
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2">Password</label>
                    <input type="password" name="password" id="form2Example2" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2">Confirm Password</label>
                    <input type="password" name="confirm_password" id="form2Example2" class="form-control" />
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        {{ $errors->first() }}
                    </div>
                @endif

                <!-- Submit button -->
                <div class="col d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection
