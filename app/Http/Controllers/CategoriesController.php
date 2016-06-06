<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Category;

class CategoriesController extends Controller
{
   
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

   public function store(Request $request)
   {
   	  $this->validate($request, [
          'name' => 'required',
          'color' => 'required',
   	  	]);

   	   Category::create($request->all());
   	   return redirect('admin/categories');
   }


   public function delete($id)
   {
   	   $category = Category::find($id);
   	   if($category)
   	   {
   	   	  $category->delete();
   	   }
   	   return redirect('admin/categories');
   }
}
