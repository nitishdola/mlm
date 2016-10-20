<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User, App\District;

class RestController extends Controller
{
    public function getUserInfo() {
      if(isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        return User::where('parent_id', $id)->with(['district'])->get();
      }
    }
}
