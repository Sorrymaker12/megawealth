@extends('layouts.main')

@section('title', 'Rent')

@section('content')
    <div class="d-flex flex-column mx-5 my-4">
        <p class="mx-5 fs-4 fw-semibold">Showing Real Estate for Rent</p>
        <div class="my-2"></div>
        <div class="d-flex flex-row flex-wrap justify-content-center">
            @if (count($RealEstates) > 0)
                @foreach ($RealEstates as $RealEstate)
                    <div class="card m-2 my-4 mx-4" style="width: 24rem; height: 30rem">
                        <img src="{{ asset('Storage/RealEstate/' . $RealEstate->image) }}" class="card-img-top"
                            alt="..." style="width: 24rem; height: 16rem">
                        <div class="card-body">
                            <p class="card-text fs-4 fw-semibold"> $ {{ $RealEstate->price }} / Month</p>
                            <p class="card-text fs-5"> {{ $RealEstate->location }}</p>
                            <button type="button" class="btn btn-info" style="color: white">
                                {{ $RealEstate->type }}</button>
                            <div class="d-flex justify-content-center">
                                <form action="{{ route('rent') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="real_estate_id" value={{ $RealEstate->id }}>
                                    <button type="submit" class="btn btn-primary">Rent</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
            @endif
        </div>
        <div class="my-2"></div>
        <div class="d-flex justify-content-center my-4">{{ $RealEstates->links() }}</div>
    </div>
@endsection
