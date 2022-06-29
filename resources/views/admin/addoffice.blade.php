@extends('layouts.main')

@section('title', 'Add Office')

@section('content')
    <div class="d-flex justify-content-center my-4">
        <form class="my-4" style="width: 50%">
            <div class="mb-3">
                <label for="OfficeName" class="form-label">Office Name</label>
                <input type="text" class="form-control" id="OfficeName">
            </div>
            <div class="mb-3">
                <label for="OfficeAddress" class="form-label">Office Address</label>
                <input type="text" class="form-control" id="OfficeAddress">
            </div>
            <div class="mb-3">
                <label for="ContactName" class="form-label">Contact Name</label>
                <input type="text" class="form-control" id="Contact Name">
            </div>
            <div class="mb-3">
                <label for="PhoneNumber" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="PhoneNumber">
            </div>
            <div class="mb-3">
                <label for="Image" class="form-label">Upload The Image</label>
                <input type="file" class="form-control" id="Image">
            </div>
            <button type="submit" class="btn btn-primary">Insert</button>
        </form>
    </div>
@endsection
