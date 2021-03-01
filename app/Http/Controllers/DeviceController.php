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
}
