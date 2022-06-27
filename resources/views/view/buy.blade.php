@extends('layouts.main')

@section('title', 'Buy')

@section('content')
    <div class="d-flex flex-column mx-5 my-4">
        <p class="mx-5 fs-4 fw-semibold">Showing Real Estate for Sale</p>
        <div class="my-2"></div>
        <div class="d-flex flex-row flex-wrap justify-content-center">
            @foreach ($RealEstates as $RealEstate)
                <div class="card m-2 my-4 mx-4" style="width: 24rem; height: 30rem">
                    <img src="{{ $RealEstate->image }}" class="card-img-top" alt="..."
                        style="width: 24rem; height: 16rem">
                    <div class="card-body">
                        <p class="card-text fs-4 fw-semibold"> $ {{ $RealEstate->price }}</p>
                        <p class="card-text fs-5"> {{ $RealEstate->location }}</p>
                        <button type="button" class="btn btn-info" style="color: white"> {{ $RealEstate->type }}</button>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-primary">Buy</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="my-2"></div>
        <div class="d-flex justify-content-center my-4">{{ $RealEstates->links() }}</div>
    </div>
@endsection
