<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

use DB, Validator, Redirect, Crypt;
use App\User, App\Tree;

class AdminController extends Controller
{
    public function __construct(){
    	$this->middleware('admin');
    }

    public function index(){
    	// return Auth::guard('admin')->user();
    	return view('admin.dashboard');
    }

    public function createUser() {
      $users    =  User::whereStatus(1)->orderBy('name', 'DESC')->lists('name', 'id')->toArray();
      return view('admin.users.add_user', compact('users'));
    }

    public function storeUser(Request $request) {

      $validator = Validator::make($data = $request->all(), User::$rules);
        if ($validator->fails()) return Redirect::back()->withErrors($validator)->withInput();
    	  $message = '';

    	   if($child_id = User::create($data)->id) {
            if($request->placed_under != '') {
              $parent_id = $request->placed_under;
              $tree_data['parent_id'] = $parent_id;
              $tree_data['child_id']  = $child_id;

              Tree::create($tree_data);
            }
            $message .= 'Customer added successfully !';
        }else{
            $message .= 'Unable to add Customer !';
        }

        return Redirect::route('admin.user.index')->with('message', $message);
    }
}
