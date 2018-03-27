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

       $fieldsMapper = array(
          'session_id' => hash_hmac('sha256', str_random(10), microtime()),
          'user_id' => $userInstance->id,
        );
       $sessionInstance =  Session::create($fieldsMapper);

       $responseString = array(
          'profile' => $userInstance,
          'session' => $sessionInstance,
          ''=>$data
        );

       return response()->json($responseString);

        }

        else
        {
        	$data = "wrong credentials";

        	return response()->json($data);
        }
      


}




}
?>