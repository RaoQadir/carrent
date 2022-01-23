<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showbrand()
    {
        return view('admin.brand.create');
    }
    public function add_brand(Request $request)
    {
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->save();
        return redirect()->route('admin.manage_brand')->with('success', "brand add successfully");
    }
    public function manage_brand()
    {
        $brand = Brand::get();
        return view('admin.brand.manage_brand', ['brand' => $brand]);
    }
    public function edit_brand(Request $request)
    {
        $brand = Brand::find($request->id);
        return view('admin.brand.edit', ['data' => $brand]);
    }
    public function delete_brand(Request $request)
    {
        $delete_brand = Brand::find($request->id)->delete();
        if ($delete_brand) {
            return redirect()->back();
        }
    }
    public function update_brand(Request $request)
    {
        $update_brnad = Brand::find($request->id);
        $update_brnad->name = $request->name;
        $update_brnad->save();
        if ($update_brnad) {
            return redirect()->route('admin.manage_brand');
        }
    }
    public function vehicle_index()
    {
        return view('admin.vehichle.index');
    }
    public function add_vehicle(Request $request)
    {
        $vehicle = new Vehicle();
        $vehicle->name = $request->name;
        $vehicle->title  = $request->title;
        $vehicle->overview = $request->overview;
        $vehicle->price = $request->price;
        $vehicle->fuel = $request->fuel;
        $vehicle->model->year = $request->model_year;
        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('vehicle_images'), $imageName);

        $vehicle->capacity = $request->capacity;
        $vehicle->image = $request->image;
        $vehicle->save();
        if ($vehicle) {
            echo "<script> alert('vehicle add successfully') </script>";
            return redirect()->back();
        }
    }
}
