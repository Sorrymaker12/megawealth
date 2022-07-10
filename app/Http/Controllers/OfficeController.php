<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;

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

    public function index_updateoffice(Request $request)
    {
        $id = $request->id;
        $office = Office::find($id);
        //return $office;
        return view('admin.updateoffice', compact('office'));
    }

    public function createOffice(Request $request){
        //return $request;
        $request->validate([
            'OfficeName' => 'required',
            'OfficeAddress' => 'required',
            'ContactName' => 'required',
            'PhoneNumber' => 'required',
            'Image' => 'required|mimes:jpeg,jpg,png|max:10000'
        ]);

        $name = $request->input('OfficeName');

        $imageName = 'office'.$name.'.'.$request->Image->extension();
        Storage::putFileAs('public/Office', $request->file('Image'), $imageName);

        $office = new Office();
        $office->id = Str::uuid();
        $office->office_name = $request->input('OfficeName');
        $office->address = $request->input('OfficeAddress');
        $office->contact_name = $request->input('ContactName');
        $office->phone_number = $request->input('PhoneNumber');
        $office->image = $imageName;
        $office->save();

        return redirect()->route('managecompany_page');
    }

    public function updateOffice(Request $request){
        $request->validate([
            'OfficeName' => 'required',
            'OfficeAddress' => 'required',
            'ContactName' => 'required',
            'PhoneNumber' => 'required'
        ]);

        $id = $request->id;
        $office = Office::find($id);

        //return $id;

        // Office::find($id)->update([
        //     'office_name' => $request->input('OfficeName'),
        //     'address' => $request->input('OfficeAddress'),
        //     'contact_name' => $request->input('ContactName'),
        //     'phone_number' => $request->input('PhoneNumber')
        // ]);

        $office->office_name = $request->input('OfficeName');
        $office->address = $request->input('OfficeAddress');
        $office->contact_name = $request->input('ContactName');
        $office->phone_number = $request->input('PhoneNumber');
        $office->save();

        return redirect()->route('managecompany_page');
    }

    public function deleteOffice(Request $request)
    {
        $office = Office::find($request->id);

        if(isset($office)){
            Storage::delete('public/Office/'.$office->image);
            $office->delete();
        }

        Office::query()->where('id','=',$request->id)->delete();

        return redirect()->route('managecompany_page');
    }
}
