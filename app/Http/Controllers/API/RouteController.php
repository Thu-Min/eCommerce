<?php

namespace App\Http\Controllers\API;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RouteController extends Controller
{
    // get all product
    public function productList(){
        $products = Product::get();
        $user = User::get();

        $data = [
            'product' => $products,
            'user' => $user
        ];

        return response()->json($data, 200);
    }

    //  get all category
    public function categoryList(){
        $category = Category::orderBy('category_id', 'desc')->get();

        return response()->json($category, 200);
    }

    // create category
    public function createCategory(Request $request){
        $data = [
            'cateogry_name' => $request->name,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];

        $response = Category::create($data);

        return response()->json($response, 200);
    }

    // delete category
    public function deleteCategory(Request $request){
        $data = Category::where('category_id', $request->category_id)->first();

        if(isset($data)){
            Category::where('category_id', $request->category_id)->delete();

            return response()->json(['message' => 'delete success'], 200);
        } else{
            return response()->json(['message' => 'there is no category'], 200);
        }
    }

    // category detail
    public function categoryDetail(Request $request){
        $data = Category::where('category_id', $request->category_id)->first();

        if(isset($data)){
            return response()->json($data, 200);
        } else{
            return response()->json(['message' => 'There is no category'], 500);
        }
    }

    // category update
    public function categoryUpdate(Request $request){
        $data = Category::where('category_id', $request->category_id)->first();

        if(isset($data)){
            Category::where('category_id', $request->category_id)->update(['cateogry_name' => $request->name]);

            return response()->json(['message' => 'Category Updated!'], 200);
        } else{
            return response()->json(['message' => 'There is no category'], 500);
        }
    }

    // create contact
    public function createContact(Request $request){
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        $response = Contact::create($data);

        return response()->json($response, 200);
    }
}
