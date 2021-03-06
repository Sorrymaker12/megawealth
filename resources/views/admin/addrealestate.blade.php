@extends('layouts.main')

@section('title', 'Add Real Estate')

@section('content')
    <div class="d-flex justify-content-center my-4">
        <div class="card shadow bg-body rounded m-5" style="width: 70rem;">
            <form action="{{ route('addRealEstate') }}" class="m-4" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group pt-3 mb-4">
                    <label class="input-group-text" for="SalesType">Sales Type</label>
                    <select class="form-select" id="SalesType" name="SalesType">
                        <option selected>Choose...</option>
                        <option value="Buy">Buy</option>
                        <option value="Rent">Rent</option>
                    </select>
                </div>
                <div class="input-group mb-4">
                    <label class="input-group-text" for="BuildingType">Building Type</label>
                    <select class="form-select" id="BuildingType" name="BuildingType">
                        <option selected>Choose...</option>
                        <option value="House">House</option>
                        <option value="Apartment">Apartment</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="Price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="Price" name="Price">
                </div>
                <div class="mb-4">
                    <label for="Location" class="form-label">Location</label>
                    <input type="text" class="form-control" id="Location" name="Location">
                </div>
                <div class="mb-5">
                    <label for="Image" class="form-label">Upload The Image</label>
                    <input type="file" class="form-control" id="Image" name="Image">
                </div>
                @if ($errors->any())
                    <div class="mb-3">
                        <div class="alert alert-warning" role="alert">
                            {{ $errors->first() }}
                        </div>
                    </div>
                @endif
                <button type="submit" class="btn btn-primary">Insert</button>
            </form>
        </div>
    </div>
@endsection
