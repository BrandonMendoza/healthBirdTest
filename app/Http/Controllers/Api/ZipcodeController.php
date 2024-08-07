<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Http\Resources\ZipcodeResource;
use App\Models\Zipcode;

class ZipcodeController extends Controller
{
    public function index(){
        return ZipcodeResource::collection(Zipcode::All());
    }

    public function show(Zipcode $zipcode){
        return new ZipcodeResource($zipcode);
    }

    /* Function to insert on DB the zipcode information. 
         Recives data from FORM.  */
    public function store(Request $request){
        //basic validation
        $request->validate([
                'zipcode'=>'required|max:5|min:5'
            ],[
                'zipcode.required'=>'Please enter a zipcode :)',
                'zipcode.max'=>'Please enter a 5 digit zipcode',
                'zipcode.min'=>'Please enter a 5 digit zipcode'
            ]
        );
        //insert zipcode on DB
        $zipcode = Zipcode::create($request->all());
        return response()->json(new ZipcodeResource($zipcode),Response::HTTP_CREATED); // Http 201   
    }
}
