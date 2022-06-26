@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <div class="d-flex justify-content-center mt-4 mb-4 ms-4 me-4">
        <div class="card" style="width: 1600px">
            <div class="card-body mt-4 mb-4" style="text-align: center">
                <p class="fs-1 fw-bold">Find Your Future Home</p>
            </div>
            <div class="d-flex justify-content-center mt-4 mb-4 ms-4 me-4">
                <form>
                    <div class="d-flex flex-row mb-3">
                        <div class="mb-3" style="width: 640px">
                            <input type="text" class="form-control"
                                placeholder="Enter a City, Property Type, Buy or Rent...">
                        </div>
                        <div class="ms-3">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="mt-4 mb-4"></div>
            <div class="mt-4 mb-4"></div>
        </div>
    </div>
@endsection
