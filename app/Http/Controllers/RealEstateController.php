<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\CartItem;
use App\Models\RealEstate;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RealEstateController extends Controller
{
    public function index_buy()
    {
        return view('view.buy', [
            'RealEstates' => RealEstate::where([['status', '=', 'available'], ['sales_type', '=', 'Buy']])->paginate(4)
        ]);
    }

    public function buy(Request $Request)
    {
        $Cart = User::find(Auth::user()->id)->cart;
        $RealEstate = RealEstate::find($Request->real_estate_id);

        $RealEstate->status = 'Cart';
        $RealEstate->save();

        $CartItem = new CartItem();
        $CartItem->id = Str::uuid();
        $CartItem->cart_id = $Cart->id;
        $CartItem->real_estate_id = $RealEstate->id;
        $CartItem->save();

        return redirect()->route('buy_page');
    }

    public function index_rent()
    {
        return view('view.rent', [
            'RealEstates' => RealEstate::where([['status', '=', 'available'], ['sales_type', '=', 'Rent']])->paginate(4)
        ]);
    }

    public function rent(Request $Request)
    {
        $Cart = User::find(Auth::user()->id)->cart;
        $RealEstate = RealEstate::find($Request->real_estate_id);

        $RealEstate->status = 'Cart';
        $RealEstate->save();

        $CartItem = new CartItem();
        $CartItem->id = Str::uuid();
        $CartItem->cart_id = $Cart->id;
        $CartItem->real_estate_id = $RealEstate->id;
        $CartItem->save();

        return redirect()->route('rent_page');
    }

    public function index_cart()
    {
        return view('view.cart', [
            'CartItems' => CartItem::where('cart_id', Auth::user()->cart->id)->paginate(4)
        ]);
    }

    public function cart_delete(Request $Request)
    {
        $RealEstate = RealEstate::find($Request->real_estate_id);
        $RealEstate->status = 'Available';
        $RealEstate->save();

        $CartItem = CartItem::find($Request->cart_item_id);
        $CartItem->delete();

        return redirect()->route('cart_page');
    }

    public function cart_checkout(Request $Request)
    {
        // checkout
        $Cart = User::find(Auth::user()->id)->cart;
        $CartItems = CartItem::where('cart_id', '=', $Cart->id)->get();

        foreach ($CartItems as $CartItem) {
            $RealEstate = RealEstate::find($CartItem->real_estate_id);
            $RealEstate->status = 'Sold';
            $RealEstate->save();

            $CartItem->delete();
        }

        return redirect()->route('home_page');
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
