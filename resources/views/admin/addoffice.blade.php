@extends('layouts.main')

@section('title', 'Add Office')

@section('content')
    <div class="d-flex justify-content-center my-4">
        <div class="card shadow bg-body rounded m-5" style="width: 70rem">
            <form action="{{ route('addOffice') }}" class="m-4" " method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="OfficeName" class="form-label">Office Name</label>
                    <input type="text" class="form-control" id="OfficeName" name="OfficeName">
                </div>
                <div class="mb-3">
                    <label for="OfficeAddress" class="form-label">Office Address</label>
                    <input type="text" class="form-control" id="OfficeAddress" name="OfficeAddress">
                </div>
                <div class="mb-3">
                    <label for="ContactName" class="form-label">Contact Name</label>
                    <input type="text" class="form-control" id="ContactName" name="ContactName">
                </div>
                <div class="mb-3">
                    <label for="PhoneNumber" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="PhoneNumber" name="PhoneNumber">
                </div>
                <div class="mb-3">
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

                <button type="submit" class="btn btn-primary mt-2">Insert</button>
            </form>
        </div>

    </div>
@endsection
