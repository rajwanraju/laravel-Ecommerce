<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Manufactur;
use DB;

class ManufacturController extends Controller
{
     public function createManufactur(){

return view('admin.manufactur.createManufactur');
}

 public function storeManufactur(Request $request){

//dd($request->all());

$this->validate($request,['manufacturName'=>'required','manufacturDescription'=>'required',
		]);

        DB::table('manufacturs')->insert([
    		'manufacturName'=>$request->manufacturName,
    		'manufacturDescription'=>$request->manufacturDescription,
    		'publicationStatus'=>$request->publicationStatus,

    		]);
        return redirect()->back()->with('message','Menufactur Store Successfully ');
    	//return redirect('/manufactur/add')->with('message','Menufactur Store Successfully ');



 	}

public function manageManufactur(){

$manufacturs=Manufactur::all();
return view('admin.manufactur.manageManufactur',['manufacturs'=>$manufacturs]);


    }
    public function editManufactur($id){
    	$manufacturById=Manufactur::where('id',$id)->first();

return view('admin.manufactur.editManufactur',['manufacturById'=>$manufacturById]);

    }


     public function updateManufactur(Request $request){
    $manufactur = Manufactur::find($request->manufacturId);
    $manufactur->manufacturName=$request->manufacturName;
	$manufactur->manufacturDescription=$request->manufacturDescription;
	$manufactur->publicationStatus=$request->publicationStatus;
	$manufactur->save();
	return redirect('/manufactur/manage')->with('message','Manufactur Info Update successfully');
    }

public function deleteManufactur($id){
 $manufactur = Manufactur::find($id);
 $manufactur->delete();
 return redirect('/manufactur/manage')->with('message','Manufactur Info delete successfully');
    
}



}