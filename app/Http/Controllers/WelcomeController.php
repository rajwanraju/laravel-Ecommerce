<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use App\Category;

class WelcomeController extends Controller {

    public function index() {


        $publishedProducts = Product::where('publicationStatus', 1)
                                      ->Paginate(4);
                                      


        return view('frontEnd.home.homeContent', ['publishedProducts' => $publishedProducts]);
    }

    public function category($id) {

        $publishedCategoryProducts = Product::where('categoryid', $id)
                ->where('publicationStatus', 1)
                ->get();

        // dd($publishedCategoryProducts);
        return view('frontEnd.category.categoryContent', ['publishedCategoryProducts' => $publishedCategoryProducts]);
    }




     public function search(Request $request){

 //$search = \Request::get('search');




    $searchProducts = Product::where('productName','like','%'.$request->search_product.'%')
                       ->paginate(4);
 
    return view('frontEnd.search',compact('searchProducts'));

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
