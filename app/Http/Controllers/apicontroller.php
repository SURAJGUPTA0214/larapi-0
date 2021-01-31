<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\food_de;

class apicontroller extends Controller
{
    function indexapi($id=null){
      return $id ? food_de::find($id):food_de::all();
    }

    function apiadd(Request $req){
      $food_de = new food_de;
      $food_de->Food=$req->Food;
      $food_de->Description=$req->Description;
      $food_de->Benefit=$req->Benefit;
      $result =$food_de->save();
      if($result){
        return ["result"=>"addition successful"];
      } 
      else{
        return ["result"=>"addition not successful"];
      }

      
    }

    function apiupdate(Request $req){
      $food_de = food_de::find($req->id);
      $food_de->Food=$req->Food;
      $food_de->Description=$req->Description;
      $food_de->Benefit=$req->Benefit;
      $result =$food_de->save();
      if($result)
      return ["result"=>"updation successful"];
      else
      return ["result"=>"updation not successful"];
    }

    function apidelete($id){

      $food_de = food_de::find($id);
      $result = $food_de->delete();
      if($result)
      return ["result"=>"deletion successful" .$id];
      else
      return ["result"=>"deletion not successful" .$id];

    }
}
