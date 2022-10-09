<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //  category page
    public function categoryPage(){

        $categoryData = Category::get();

        return view('admin.category.category')->with(['categoryData'=>$categoryData]);
    }

    // add category process
    public function addCategory(Request $request){
        $data = [
            'cateogry_name'=>$request->name,
        ];

        Category::create($data);

        return back()->with(['added'=>'Category Added!']);
    }

    // delete category process
    public function deleteCategory($id){
        Category::where('category_id', $id)->delete();

        return back()->with(['deleted'=> "Category Deleted!"]);
    }

    // edit category page
    public function editCategoryPage($id){
        $data = Category::where('category_id', $id)->first();

        return view('admin.category.editCategory')->with(['data'=>$data]);
    }

    // edit category process
    public function editCategory(Request $request,$id){
        $editName = $request->editName;

        Category::where('category_id', $id)->update(['cateogry_name' => $editName]);

        return redirect()->route('admin#categoryPage')->with(['updated'=>"Category Updated!"]);
    }

    // category search (user)
    public function categorySearch($id){
        $data = Product::where('category_id', $id)->paginate(8);
        $category = Category::get();

        return view('customer.shop')->with(['product' => $data, 'category' => $category]);
    }
}
