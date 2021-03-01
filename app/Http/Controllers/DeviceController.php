<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    public function list()
    {
    	return Device::all();
    }


    public function add(Request $request)
    {

    	Device::create($request->only(['name','member_id']));
    	return [
    		"result"=>"Data has been saved"
    	];
    }

    public function update(Request $request)
    {
    	
    	$device = Device::find($request->id);
    	if($device)
    	{
    	$device-> update($request->only(['name', 'member_id']));

    	 return ["result"=>"Operation finished succesfully"];
    	}

    	else return [
    		"result"=>"Operation failed"
    	];

    	
    
  
    }
}
