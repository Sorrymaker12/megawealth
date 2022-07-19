@extends('layouts.main')

@section('title', 'Manage Company')

@section('content')
    <div class="mx-5 my-4">
        <a class="btn btn-primary mx-5 mt-2 mb-4" href="/admin/addoffice" role="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
            </svg>
            Add Office
        </a>

        <div class="my-4"></div>
        <div class="d-flex flex-column mb-3">
            <div class="d-flex justify-content-center">
                @foreach ($Offices as $Office)
                    {{-- Office Card --}}
                    <div class="card mx-4 shadow bg-body rounded" style="width: 24rem; height: 32rem; border: none;">
                        <img src="{{ asset('Storage/Office/' . $Office->image) }}" class="card-img-top" alt="..."
                            style="height: 20rem; width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $Office->office_name }}</h5>
                            <p class="card-text">{{ $Office->address }}</p>
                            <p class="card-text">{{ $Office->contact_name }} - +{{ $Office->phone_number }}</p>
                            <div class="d-flex justify-content-center">
                                <a href="/admin/updateoffice/{{ $Office->id }}" class="btn btn-primary mx-4">Update</a>
                                {{-- <a href="/admin/deleteoffice/{{ $Office->id }}" class="btn btn-danger mx-4">Delete</a> --}}
                                <form action="/admin/deleteoffice/{{ $Office->id }}" method="POST">
                                    {{ method_field('DELETE') }}
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="d-flex justify-content-center my-5">{{ $Offices->links() }}</div>
    </div>
@endsection
