@extends('layouts.main')

@section('title', 'Cart')

@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('message') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="d-flex flex-column mx-5 my-4">
        <p class="mx-5 fs-4 fw-semibold">Your Cart</p>
        <div class="my-2"></div>
        <div class="d-flex flex-row flex-wrap justify-content-center">
            @if (count($CartItems) > 0)
                @foreach ($CartItems as $CartItem)
                    @php
                        $RealEstate = App\Models\RealEstate::find($CartItem->real_estate_id);
                    @endphp
                    <div class="card m-2 my-4 mx-4 shadow bg-body rounded"
                        style="width: 24rem; height: 30rem; border: none">
                        <img src="{{ asset('Storage/RealEstate/' . $RealEstate->image) }}"
                            class="card-img-top rounded-3 px-1 py-1" alt="..." style="width: 100%; height: 16rem">
                        <div class="card-body">
                            @if ($RealEstate->sales_type == 'Buy')
                                <p class="card-text fs-4 fw-semibold"> $ {{ $RealEstate->price }} </p>
                            @else
                                <p class="card-text fs-4 fw-semibold"> $ {{ $RealEstate->price }} / Month</p>
                            @endif
                            <p class="card-text fs-5"> {{ $RealEstate->location }}</p>
                            <button type="button" class="btn btn-info me-2 btn-sm fw-bold" style="color: white">
                                {{ $RealEstate->type }}</button>
                            <button type="button" class="btn btn-warning ms-2 btn-sm fw-bold" style="color: white">
                                {{ $CartItem->created_at }}</button>
                            <div class="d-flex justify-content-center mt-3">
                                <form action="{{ route('cart_delete') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="cart_item_id" value={{ $CartItem->id }}>
                                    <input type="hidden" name="real_estate_id" value={{ $RealEstate->id }}>
                                    <button type="submit" class="btn btn-danger">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="mx-5 fs-4 fw-semibold">No Data in Cart Yet</p>
            @endif
        </div>
        <div class="my-2"></div>
        <div class="d-flex justify-content-center my-4">{{ $CartItems->links() }}</div>
        <div class="my-2"></div>
        @if (count($CartItems) > 0)
            <div class="d-flex justify-content-center">
                <form action="{{ route('cart_checkout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Checkout</button>
                </form>
            </div>
        @endif
    </div>

@endsection
