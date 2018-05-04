<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\Manufactur;
use App\Product;
use App\ProductImage;
use DB;

class ProductController extends Controller {

    protected $imageUrl;

    public function createProduct() {

        $categories = Category::where('publicationStatus', 1)->get();
        $manufacturs = Manufactur::where('publicationStatus', 1)->get();
        return view('admin.product.createProduct', ['categories' => $categories, 'manufacturs' => $manufacturs]);
    }

    public function storeProduct(Request $request) {
        //return $request->all();
        $this->validate($request, [
            'productName' => 'required',
            'productPrice' => 'required',
            'productImage' => 'required',
        ]);



if($request->hasFile('productImage'))
 
{
 
$allowedfileExtension=['pdf','jpg','png','docx'];
 
$files = $request->file('productImage');
 
foreach($files as $file){
 
$filename = $file->getClientOriginalName();
 
$extension = $file->getClientOriginalExtension();
 
$check=in_array($extension,$allowedfileExtension);
 
//dd($check);
 
if($check)
 
{
 
$items= Product::create($request->all());
 
foreach ($request->productImage as $photo) {
 
$filename = $photo->store('productImage');
 
ProductImage::create([
 
'productId' => $items->id,
 
'image' => $productImage
 
]);
 
}
 
dd()
 
}
 
else
 
{
 
dd() 
}
 
}
 
}
 



















//         // $productImage = $request->file('productImage');
//         // $name = $productImage->getClientOriginalName();
//         // $uploadPath = 'public/productImage/';
//         // $productImage->move($uploadPath, $name);
//         // $imageUrl = $uploadPath . $name;


//         $photos = $request->file('productImage');


//          $paths  = [];

//          foreach ($photos as $photo) {
//              $extension = $photo->getClientOriginalExtension();
//              $filename  = 'Product-Image-' . time() . '.' . $extension;
//              $uploadPath = 'public/productImage/';
//              $extension->Storage::put($uploadPath, $filename);
//              $paths = $uploadPath . $name;
//          }
// dd($paths);



        // $input=$request->all();
        //    $images=array();
        //    if($request->hasFile('productImage')){
        //      $files = $request->file('productImage');
        //        foreach($files as $file){
        //            $name=$file->getClientOriginalName();
        //            $file->move('productImage',$name);
        //            $images[]=$file;
        //        }
        //    }
        //
        //
        //   Product::insert( [
        //
        //            'productName' =>$request->productName,
        //             'categoryid' =>$request->categoryid,
        //              'manufacturid' =>$request->manufacturid,
        //               'productPrice' =>$request->productPrice,
        //                'productQuentity' =>$request->productQuentity,
        //                 'productShortDescription' =>$request->productShortDescription,
        //                  'productLongDescription' =>$request->productLongDescription,
        //                   'productImage'=>  implode("|",$images),
        //                    'publicationStatus' =>$request->publicationStatus,
        //            //you can put other insertion here
        //        ]);


        // $this->saveProductInfo($request, $images);
        return redirect('/product/add')->with('message', 'Product info Save successfully');
    }

    // protected function saveProductInfo($request, $imageUrl) {
    //     $product = new Product();
    //     $product->productName = $request->productName;
    //     $product->categoryid = $request->categoryid;
    //     $product->manufacturid = $request->menufacturid;
    //     $product->productPrice = $request->productPrice;
    //     $product->productQuentity = $request->productQuentity;
    //     $product->productShortDescription = $request->productShortDescription;
    //     $product->productLongDescription = $request->productLongDescription;
    //     $product->productImage = implode("|",$images),;
    //     $product->publicationStatus = $request->publicationStatus;
    //     $product->save();
    // }



public function ProductImageAdd($id){

  $productId = Product::where('id', $id)->first();


        return view('admin.product.addImage', ['productId' => $productId]);


}


public function ProductImageStore(Request $request){

$this->validate($request, [
 

 
'image'=>'required',
 
]);
 
if($request->hasFile('image'))
 
{
 
$allowedfileExtension=['pdf','jpg','png','docx'];
 
$files = $request->file('image');
 
foreach($files as $file){
 
$filename = $file->getClientOriginalName();
 
$extension = $file->getClientOriginalExtension();
 
$check=in_array($extension,$allowedfileExtension);
 
//dd($check);
 
if($check)
 
{
 
$items= ProductImage::create($request->all());
 
foreach ($request->image as $photo) {
 
$filename = $photo->store('photos');
 
ItemDetail::create([
 
'item_id' => $items->id,
 
'filename' => $filename
 
]);
 
}
 
echo "Upload Successfully";
 
}
 
else
 
{
 
echo '<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only Upload png , jpg , doc</div>';
 
}
 
}
 
}
 


}





    public function manageProduct() {
        $products = DB::table('products')
                ->join('categories', 'products.categoryid', '=', 'categories.id')
                ->join('manufacturs', 'products.manufacturid', '=', 'manufacturs.id')
                ->select('products.id', 'products.productName','products.productImage', 'products.productPrice', 'products.productQuentity', 'products.publicationStatus', 'categories.categoryName', 'manufacturs.manufacturName')
                ->get();

        return view('admin.product.manageProduct', ['products' => $products]);
    }

    public function viewProduct($id) {
        $productById = DB::table('products')
                ->join('categories', 'products.categoryid', '=', 'categories.id')
                ->join('manufacturs', 'products.manufacturid', '=', 'manufacturs.id')
                ->select('products.id', 'products.productName', 'products.productPrice', 'products.productQuentity', 'products.publicationStatus', 'products.productShortDescription', 'products.productLongDescription', 'products.productImage', 'categories.categoryName', 'manufacturs.manufacturName')
                ->where('products.id', $id)
                ->first();


        return view('admin.product.viewProduct', ['product' => $productById]);
    }

    public function editProduct($id) {

        $categories = Category::all();
        $manufacturs = Manufactur::where('publicationStatus', 1)->get();

        $productById = Product::where('id', $id)->first();


        return view('admin.product.editProduct')
                        ->with('productById', $productById)
                        ->with('categories', $categories)
                        ->with('manufacturs', $manufacturs);
    }
/*
    public function updateProduct(Request $request,$id) {

$product = Product::find($id);

dd($product);

  $this->validate($request, [
            'productName' => 'required',
            'productPrice' => 'required',
            'productImage' => 'required',
        ]);


if($request->hasFile('productImage')){

        $productImage = $request->file('productImage') ;
        $filename = $productImage->getClientOriginalName();
        $uploadPath = 'public/productImage/';
        $productImage->move($uploadPath, $filename);
        $imageUrl = $uploadPath . $filename;
        $oldimage =$product->productImage;

        $product->productImage=$imageUrl;
         Storage::delete($oldimage);

}
        $product->productName = $request->productName;
        $product->categoryid = $request->categoryid;
        $product->manufacturid = $request->menufacturid;
        $product->productPrice = $request->productPrice;
        $product->productQuentity = $request->productQuentity;
        $product->productShortDescription = $request->productShortDescription;
        $product->productLongDescription = $request->productLongDescription;
       $product->publicationStatus = $request->publicationStatus;
        $product->save();


    }

*/


    public function updateProduct(Request $request) {
       $imageUrl = $this->imageExistStatus($request);

     $product = Product::find($request->productId);

         $product->productImage =   $imageUrl;
         $product->productName = $request->productName;
        $product->categoryid = $request->categoryid;
        $product->manufacturid = $request->menufacturid;
        $product->productPrice = $request->productPrice;
        $product->productQuentity = $request->productQuentity;
        $product->productShortDescription = $request->productShortDescription;
        $product->productLongDescription = $request->productLongDescription;
       $product->publicationStatus = $request->publicationStatus;
        $product->save();
           return redirect('/product/manage')->with('message', 'Product update  successfully');
    }






    private function imageExistStatus($request) {
        $productById = Product::where('id', $request->productId)->first();

        $productImage = $request->file('productImage');

        if ($productImage) {
            $name = $productImage->getClientOriginalName();
            $uploaPath = 'public/productImage/';
            unlink($productById->productImage);
            $productImage->move($uploaPath, $name);
            $imageUrl = $uploaPath . $name;
        } else {
            $imageUrl = $productById->productImage;
        }

        return $imageUrl;
    }

    public function deleteProduct($id) {

        $product = Product::find($id);
        $product->delete();
        return redirect('/product/manage')->with('message', 'Product Info delete successfully');
    }

}
