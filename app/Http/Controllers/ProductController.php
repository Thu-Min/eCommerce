<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    // product page
    public function productPage(){
        $data = Product::get();

        return view('admin.product.productPage')->with(['data' => $data]);
    }

    // add product page
    public function addProductPage() {
        $data = Category::get();

        return view('admin.product.addProduct')->with(['category' => $data]);
    }

    // add product process
    public function addProduct(Request $request){
        $file = $request->file('image');
        $filename = uniqid() . $file->getClientOriginalName();
        $file->move(public_path() . '/product_album', $filename);

        $data = $this->getProductDetails($request, $filename);

        Product::create($data);

        return redirect()->route('admin#productPage')->with(['added' => 'New Product Added!']);
    }

    // delete product
    public function deleteProduct($id){
        $data = Product::select('image')->where('product_id', $id)->first();

        $filename = $data['image'];

        Product::where('product_id', $id)->delete();

        if(File::exists(public_path() . '/product_album/' . $filename)){
            File::delete(public_path() . '/product_album/' . $filename);
        }

        return back()->with(['deleted' => 'Product Deleted!']);
    }

    // get product details
    private function getProductDetails($request, $filename){
        return [
            'category_id' => $request->categoryId,
            'product_name' => $request->name,
            'image' => $filename,
            'description' => $request->description,
        ];
    }
}
