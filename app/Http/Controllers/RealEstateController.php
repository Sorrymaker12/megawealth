<?php

namespace App\Http\Controllers;

use App\Models\RealEstate;
use Illuminate\Http\Request;

class RealEstateController extends Controller
{
    public function index_buy()
    {
        return view('view.buy', [
            'RealEstates' => RealEstate::where([['status', '=', 'available'], ['sales_type', '=', 'Buy']])->paginate(4)
        ]);
    }

    public function index_rent()
    {
        return view('view.rent', [
            'RealEstates' => RealEstate::where([['status', '=', 'available'], ['sales_type', '=', 'Rent']])->paginate(4)
        ]);
    }

    public function index_cart()
    {
        return view('view.cart');
    }

    public function index_result()
    {
        return view('view.result');
    }

    public function index_managerealestate()
    {
        return view('admin.managerealestate', [
            'RealEstates' => RealEstate::where('status', 'like', '%')->paginate(4)
        ]);
    }

    public function index_addrealestate()
    {
        return view('admin.addrealestate');
    }

    public function index_updaterealestate()
    {
        return view('admin.updaterealestate');
    }
}
