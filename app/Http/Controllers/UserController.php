<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Refferal;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all()->except([1]);
        $userArr = [];
        $level = 0;
        foreach ($users as $user) {
           $refferedBy =  Refferal::select("user_refferal")->where("user_id",$user->id)->first();
           $count = Refferal::where("user_refferal",$user->refferal)->count();
           if ($count >= 10) {
              $count = 10;
              $level = 1;
           }else{
              $level = 11-$count;
           }
           $user["refCount"] = $count;
           $user["level"] = $level;
           $user["refferedBy"] = $refferedBy["user_refferal"] ?? "";
           $userArr[] = $user;
        }
        return view('users',compact("userArr"));
    }
}
