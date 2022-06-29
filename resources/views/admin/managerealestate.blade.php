@extends('layouts.main')

@section('title', 'Manage Real Estate')

@section('content')
    <div class="mx-5 my-4">
        <a class="btn btn-primary mx-5 mt-2 mb-4" href="/admin/addrealestate" role="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
            </svg>
            Add Real Estate
        </a>
        <div class="my-4"></div>
        <div class="d-flex flex-column mb-3">
            <div class="d-flex justify-content-center">
                @foreach ($RealEstates as $RealEstate)
                    {{-- Real Estate Card --}}
                    <div class="card mx-4" style="width: 24rem; height: 32rem;">
                        <img src="{{ $RealEstate->image }}" class="card-img-top" alt="..."
                            style="height: 20rem; width: 24rem;">
                        <div class="card-body">
                            <h5 class="card-title"> $ {{ $RealEstate->price }} @if ($RealEstate->sales_type === 'Rent')
                                    / Month
                                @endif
                            </h5>
                            <p class="card-text"> {{ $RealEstate->location }}</p>
                            <div class="d-flex flex-row mb-3">
                                <button type="button" class="btn btn-info btn-sm me-2">{{ $RealEstate->type }}</button>
                                @if ($RealEstate->status === 'Available')
                                    <button type="button"
                                        class="btn btn-primary btn-sm mx-2">{{ $RealEstate->sales_type }}
                                    </button>
                                    <button type="button" class="btn btn-success btn-sm mx-2">{{ $RealEstate->status }}
                                    </button>
                                @else
                                    <button type="button" class="btn btn-success btn-sm mx-2">Transaction
                                        Completed</button>
                                @endif
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="/admin/updaterealestate" class="btn btn-primary mx-4">Update</a>
                                <a href="#" class="btn btn-danger mx-4">Delete</a>
                                @if ($RealEstate->status === 'Cart')
                                    <a href="#" class="btn btn-success mx-4">Finish</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="d-flex justify-content-center my-5">{{ $RealEstates->links() }}</div>
    </div>
@endsection
