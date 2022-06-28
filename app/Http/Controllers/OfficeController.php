<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;

class OfficeController extends Controller
{
    public function index_about()
    {
        $offices = Office::paginate(5);
        return view('view.about', compact('offices'));
    }

    public function index_managecompany()
    {
        $Offices = Office::paginate(4);
        return view('admin.managecompany', compact('Offices'));
    }

    public function index_addoffice()
    {
        return view('admin.addoffice');
    }

    public function index_updateoffice()
    {
        return view('admin.updateoffice');
    }
}
