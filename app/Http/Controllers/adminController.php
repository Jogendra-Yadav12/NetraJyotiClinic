<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        return view("admin.addCategory");
    }

    public function category(){
        $category = Category::all();
        $i = 1;
        return view("admin.category",compact("category","i"));
    }

    public function addcategory(Request $request){
        $request->validate([
            'name' => 'required',
            'img' => 'required',
        ]);

        $imageName = time().'.'.$request->img->extension();

        $request->img->move(public_path('images'), $imageName);

        Category::create([
            'name' => $request->name,
            'img' => $imageName,
        ]);
    }
}
