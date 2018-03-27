<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Model\Session;
use App\Model\Fleet_Operator;


class LoginController extends Controller
{


public function login(Request $request)
{

      		$this -> validate($request,[

       		"email"=>"required",
       		"password"=>"required"

]);

    
       $baseCondition = array(
       	['email', '=', $request->get('email')],
       	['password', '=', $request->get('password')]
       );
       
       if(       
       	$userInstance = Fleet_Operator::where($baseCondition)->first()  
         )

       {
       $data = "logged in Successfully";

       $Session_id = str_random(30);

               Session::create();

       return response()->json($data);


        }

        else
        {
        	$data = "wrong credentials";

        	return response()->json($data);
        }
      


}




}
?>