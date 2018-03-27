<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Model\Fleet_Operator;


class Fleet_OperatorController extends Controller
{

	public function register_fleet_operator(Request $request)
	{
       		$this -> validate($request,[

       			"email" => "required|email",
       			"username" => "required|max:20",
            "password" => "required|max:40"
            

]);

     $user = Fleet_Operator::create($request->all());

  	 $data = "Fleet Operator Registered Successfully";

     return response()->json($data);

  }

  




}
?>