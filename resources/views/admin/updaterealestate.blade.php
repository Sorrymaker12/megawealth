@extends('layouts.main')

@section('title', 'Update Real Estate')

@section('content')
    <div class="d-flex flex-row mb-3">
        <div class="photo m-5" style="width: 50%">
            <img src="{{ asset('Storage/RealEstate/'.$realestate->image) }}" alt="..." style="height: 20rem; width: 100%;">
        </div>
        <div class="updateForm" style="width: 50%">
            <form action="{{ $realestate->id }}" class="my-4" style="width: 50%" method="post" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                @csrf
                <div class="input-group mb-3">
                    <label class="input-group-text" for="SalesType">Sales Type</label>
                    <select class="form-select" id="SalesType" name="SalesType">
                        <option selected>{{ $realestate->sales_type }}</option>

                        @if ($realestate->sales_type == 'Buy')
                            <option value="Rent">Rent</option>
                        @else
                            <option value="Buy">Buy</option>
                        @endif
                    </select>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="BuildingType">Building Type</label>
                    <select class="form-select" id="BuildingType" name="BuildingType">
                        <option selected>{{ $realestate->type }}</option>

                        @if ($realestate->type == 'House')
                            <option value="Apartment">Apartment</option>
                        @else
                            <option value="House">House</option>
                        @endif
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="Price" name="Price" value="{{ $realestate->price }}">
                </div>
                <div class="mb-3">
                    <label for="Location" class="form-label">Location</label>
                    <input type="text" class="form-control" id="Location" name="Location" value="{{ $realestate->location }}">
                </div>

                @if ($errors->any())
                    <div class="mb-3">
                        <div class="alert alert-warning" role="alert">
                            {{ $errors->first() }}
                        </div>
                    </div>
                @endif

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
