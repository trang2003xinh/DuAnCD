<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(Request $request){

        $locations = Location::all();
        return view('locations.index', compact('locations'));
    }

    // Thêm - Create - C
    public function create(Request $request)
    {
        return view('locations.create');
    }

    //luu thong tin
    public function store(Request $request)
    {
        $location = new Location();
        $location->name = $request->input('name');
        $location->address = $request->input('address');
        $location->description = $request->input('description');
        $location->email = $request->input('email');
        $location->save();
        return redirect()->back()->with('status', 'Them kho chua tai san thanh cong');
    }

    // Sửa - Edit - U
    public function edit($id)
    {
        //tìm category theo id
        $location = Location::find($id);
        return view('locations.edit', compact('location'));
    }

    public function update(Request $request, $id)
    {
        //tìm category theo id
        $location = Location::find($id);
        $location->name = $request->input('name');
        $location->address = $request->input('address');
        $location->description = $request->input('description');
        $location->email = $request->input('email');
        $location->update();
        return redirect()->back()->with('status', 'Cap nhat loai tai san thanh cong');
    }

    // Xóa - Delete - D
    public function delete($id)
    {
        $location = Location::find($id);
        $location->delete();
        return redirect()->back()->with('status', 'Xoa loai tai san thanh cong');
    }
}
