@extends('layouts.main')

@section('title', 'Add Real Estate')

@section('content')
    <div class="d-flex justify-content-center my-4">
        <form class="my-4" style="width: 50%">
            <div class="input-group mb-3">
                <label class="input-group-text" for="SalesType">Sales Type</label>
                <select class="form-select" id="SalesType">
                    <option selected>Choose...</option>
                    <option value="Buy">Buy</option>
                    <option value="Rent">Rent</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="BuildingType">Building Type</label>
                <select class="form-select" id="BuildingType">
                    <option selected>Choose...</option>
                    <option value="House">House</option>
                    <option value="Apartment">Apartment</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="Price" class="form-label">Price</label>
                <input type="text" class="form-control" id="Price">
            </div>
            <div class="mb-3">
                <label for="Location" class="form-label">Location</label>
                <input type="text" class="form-control" id="Location">
            </div>
            <div class="mb-3">
                <label for="Image" class="form-label">Upload The Image</label>
                <input type="file" class="form-control" id="Image">
            </div>
            <button type="submit" class="btn btn-primary">Insert</button>
        </form>
    </div>
@endsection
