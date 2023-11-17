<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoryController extends Controller
{
   public function index(){
    $categories = Category::all();
    return Inertia::render("Admin/Categories/Index",[
        "categories"=> $categories,
    ]);
   }
   public function store(Request $request){

   Category::create($request->all());

   }
   public function update(Request $request,$id){

    Category::find($id)->update($request->all());

   }

   public function destroy($id){

    Category::find($id)->delete();

   }


}
