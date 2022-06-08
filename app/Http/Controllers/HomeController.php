<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dateValid(Request $request)
    {
        $date = $request->input('date');
        if($date===null){
            $date=date('Y-m-d');
        }
        return $date ;
        }

    public function addPlayers(Request $request)
    {
$validation =$request->validate([
    'playersName'=>'required',
    'playersCity'=>'required',
]);
    }
}
