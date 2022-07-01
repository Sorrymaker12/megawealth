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

        return redirect()->route('buy_page')->with('message', 'Item Added to Cart');
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

        return redirect()->route('rent_page')->with('message', 'Item Added to Cart');
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

        return redirect()->route('cart_page')->with('message', 'Item Removed');
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

        return redirect()->route('home_page')->with('message', 'Checkout Successful');
    }

    public function search(Request $Request)
    {
        $Request->validate(
            [
                'search' => 'required|string|max:255',
            ]
        );

        return redirect('view/result/' . $Request->search);
    }

    public function index_result(String $Key)
    {
        // find real estate with location that contains $Key
        $RealEstates = RealEstate::where('status', '=', 'Available')
            ->where(function ($query) use ($Key) {
                $query->where('location', 'like', '%' . $Key . '%')
                    ->orWhere('sales_type', 'like', '%' . $Key . '%')
                    ->orWhere('type', 'like', '%' . $Key . '%');;
            })->paginate(4);

        return view('view.result', [
            'RealEstates' => $RealEstates,
            'Key' => $Key
        ]);
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
