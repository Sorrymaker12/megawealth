@extends('layouts.main')

@section('title', 'Update Office')

@section('content')
    <div class="d-flex flex-row mb-3">
        <div class="photo shadow bg-body rounded m-5" style="width: 50%">
            <img src="{{ asset('Storage/Office/'.$office->image) }}" alt="..." style="height: 30rem; width: 100%;">
        </div>
        <div class="card shadow bg-body rounded m-5" style="width: 50%">
            <form action="{{ $office->id }}" class="my-4 mx-4" method="post" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                @csrf
                <div class="mb-3">
                    <label for="OfficeName" class="form-label">Office Name</label>
                    <input type="text" class="form-control" id="OfficeName" name="OfficeName" value="{{ $office->office_name }}">
                </div>
                <div class="mb-3">
                    <label for="OfficeAddress" class="form-label">Office Address</label>
                    <input type="text" class="form-control" id="OfficeAddress" name="OfficeAddress" value="{{ $office->address }}"">
                </div>
                <div class="mb-3">
                    <label for="ContactName" class="form-label">Contact Name</label>
                    <input type="text" class="form-control" id="ContactName" name="ContactName" value="{{ $office->contact_name }}"">
                </div>
                <div class="mb-3">
                    <label for="PhoneNumber" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="PhoneNumber" name="PhoneNumber" value="{{ $office->phone_number }}"">
                </div>

                @if ($errors->any())
                    <div class="mb-3">
                        <div class="alert alert-warning" role="alert">
                            {{ $errors->first() }}
                        </div>
                    </div>
                @endif

                <button type="submit" class="btn btn-primary mt-3">Update</button>
            </form>
        </div>
    </div>
@endsection
