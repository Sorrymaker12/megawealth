@extends('auth.authtemplate')

@section('content')
    <div class="container-fluid d-flex justify-container-center pt-5">
        <div class="container " style="width: 800px">
            <form action="{{route('login')}}" method="post">
                @csrf
                <!-- Email input -->
                <h1 class="h1 text-center mb-5">Login</h1>
                <div class="form-outline mb-4">
                    <input type="email" name="email" id="form2Example1" class="form-control"
                        value={{ \Illuminate\Support\Facades\Cookie::get('LoginCookie') !== NULL ?
                        \Illuminate\Support\Facades\Cookie::get('LoginCookie') : ""}}>
                    <label class="form-label" for="form2Example1">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" name="password" id="form2Example2" class="form-control"/>
                    <label class="form-label" for="form2Example2">Password</label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example31"
                                checked={{ \Illuminate\Support\Facades\Cookie::get('LoginCookie') !== NULL }}/>
                            <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                    </div>
                </div>

                @if($errors->any())
                    <div class="alert alert-danger">
                        {{$errors->first()}}
                    </div>
                @endif

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>Not a member? <a href="/auth/register">Register</a></p>
                </div>
            </form>
        </div>
    </div>
@endsection
