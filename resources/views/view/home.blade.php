@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <div class="d-flex justify-content-center mt-4 mb-4 ms-4 me-4">
        <div class="card" style="width: 1600px">
            <div class="card-body mt-4 mb-4" style="text-align: center">
                <p class="fs-1 fw-bold">Find Your Future Home</p>
            </div>
            <div class="mt-4 mb-4"></div>
            <div class="mt-4 mb-4"></div>
            <div class="d-flex justify-content-center mt-4 mb-4 ms-4 me-4">
                <form>
                    <div class="d-flex flex-row mb-3">
                        <div class="mb-3" style="width: 640px">
                            <input type="text" class="form-control"
                                placeholder="Enter a City, Property Type, Buy or Rent...">
                        </div>
                        <div class="ms-3">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="mt-4 mb-4"></div>
            <div class="mt-4 mb-4"></div>
            <div class="mt-4 mb-4"></div>
            <div class="mt-4 mb-4"></div>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-4 mb-4 ms-4 me-4">
        <div class="card mx-4 mt-4 mb-4" style="width: 18rem;">
            <img src="https://coolhdwall.com/storage1/202107/night-coffee-drinking-city-scenery-2k-wallpaper-2560x1440.jpg"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Buy Real Estate</h5>
                <p class="card-text">Find the perfect real estate to buy. Click the button below to view available real
                    estate to buy.</p>
                <div class="d-flex justify-content-center">
                    <a href="/view/buy" class="btn btn-primary">Buy</a>
                </div>
            </div>
        </div>
        <div class="card  mx-4  mt-4 mb-4" style="width: 18rem;">
            <img src="https://i.pinimg.com/originals/16/65/a7/1665a7ae96ba9e767182d472c8f4f52e.jpg" class="card-img-top"
                alt="...">
            <div class="card-body">
                <h5 class="card-title">Rent Real Estate</h5>
                <p class="card-text">Find the perfect real estate to rent. Click the button below to view rented real
                    estate.</p>
                <div class="d-flex justify-content-center">
                    <a href="/view/rent" class="btn btn-primary">Rent</a>
                </div>
            </div>
        </div>
        <div class="card mx-4  mt-4 mb-4" style="width: 18rem;">
            <img src="https://2.bp.blogspot.com/-ZfnOTYS5N28/XOlXukcvsiI/AAAAAAAADIU/OyFzbIRUNo0eCZCgI9fZuvX5ERlM8nQgwCKgBGAs/w1920-h1080-c/anime-scenery-city-buildings-silhouette-uhdpaper.com-8K-177.jpg"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">About Us</h5>
                <p class="card-text">Learn more about megawealth, our company and everything about us. Click the button
                    below to view.</p>
                <div class="d-flex justify-content-center">
                    <a href="/view/about" class="btn btn-primary">About Us</a>
                </div>
            </div>
        </div>
    </div>
@endsection
