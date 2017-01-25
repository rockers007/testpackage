<?php 
namespace Testmodule\TEST\Controllers;

use Illuminate\http\Request;
//use Illuminate\Routing\Controller;
use Laravel\Lumen\Routing\Controller as BaseController;

class TestController extends BaseController
{
   public function index(Request $request)
   {
		if($request->has('weight') && $request->has('high')){
			$weight = $request->get('weight');
			$high = $request->get('high');
			$bmi = round($weight / ($high * $high),1);
		} else {
			$bmi = "Please enter valid value";
		}
		return $bmi;
   }
}