<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;

class OfficeController extends Controller
{
    public function index_about(){
        $offices = Office::paginate(5);
        return view('view.about', compact('offices'));
    }
}
