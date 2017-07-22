<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use App\Category;

class WelcomeController extends Controller {

    public function index() {


        $publishedProducts = Product::Paginate(2);


        return view('frontEnd.home.homeContent', ['publishedProducts' => $publishedProducts]);
    }

    public function category($id) {

        $publishedCategoryProducts = Product::where('categoryid', $id)
                ->where('publicationStatus', 1)
                ->get();

        // dd($publishedCategoryProducts);
        return view('frontEnd.category.categoryContent', ['publishedCategoryProducts' => $publishedCategoryProducts]);
    }

    public function search_product(Requests $request) {

        $search = $request->search_product;
        $Products = DB::table('products')->where('productName', 'like', "$search")->paginate(10);
        return view('frontEnd.home.homeContent', compact('Products'));
    }

    public function offers() {


        return view('frontEnd.category.offers');
    }

    public function contact() {


        return view('frontEnd.contact.contact');
    }

    public function productDetails($id) {


        $productById = Product::where('id', $id)->first();


        return view('frontEnd.product.productContent', ['productById' => $productById]);
    }

}
