@extends('layouts.main')

@section('title', 'About Us')

@section('content')
    <div class="text-center"
        style="height: 25rem; color:white; background-image:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('/Storage/Assets/Building.jpg');
     background-repeat:no-repeat;
    background-size: cover;   background-position: center;">

        <h1 style="padding-top:8rem; padding-bottom:4rem">About Our Company</h1>
        <p style="padding-left: 15rem; padding-right:15rem; font-size:16pt">Our company was founded at 2008 by our founder
            Renanda. At that time, we started as law firm specializing in real estate and construction. In 2012, our company
            expanded our service to real estates with the included service of real estates lawyers. Today, our company have
            5 offices throughout the states and is planning to build more</p>
    </div>
    <div class="office-container mt-5" style="margin-left: 15rem">
        <h2>Our Offices</h2>
        <div class="office-container mt-5 mb-3">
            <div class="office-container row" style="width: 90rem">
                @foreach ($offices as $ofc)
                    <div class="card shadow bg-body rounded px-0 py-0"
                        style="width: 16rem; margin-left:auto; margin-right:auto; border: none;">
                        <img src="{{ asset('Storage/Office/' . $ofc->image) }}" class="card-img rounded-3 px-1 py-1"
                            style="height: 10rem; width:100%;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $ofc->office_name }}</h5>
                            <p class="card-text">{{ $ofc->address }}</p>
                            <p class="card-text">{{ $ofc->contact_name }}</p>
                            <p class="card-text">{{ $ofc->phone_number }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="p-4"></div>
    <div class="pagination d-flex justify-content-center">
        {{ $offices->links() }}
    </div>
@endsection
