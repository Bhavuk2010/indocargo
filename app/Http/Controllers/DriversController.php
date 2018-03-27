<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class DriversController extends Controller
{

	public function register_driver(Request $request)
	{
       		$this -> validate($request,[

       			"id" => "required",
       			"driver_name" => "required",
       			"email" => "required|email",
       			"hp_no" => "required",
       			"license_no" => "required",
       			"identification_no" => "required",
       			"password" => "required",
       			"status" => "required",
       			"image" => "required",

]);

	
     $user = Drivers::create($request->all());


	$data = "driver Registered Successfully";


	return response()->json($data);
    }
}




?>