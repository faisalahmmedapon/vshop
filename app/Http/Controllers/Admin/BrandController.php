<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BrandController extends Controller
{
    public function index(){
        $brands = Brand::all();
        return Inertia::render("Admin/Brands/Index",[
            "brands"=> $brands,
       }
       public function store(Request $request){

        Brand::create($request->all());

       }
       public function update(Request $request,$id){

        Brand::find($id)->update($request->all());

       }

       public function destroy($id){

        Brand::find($id)->delete();

       }
}