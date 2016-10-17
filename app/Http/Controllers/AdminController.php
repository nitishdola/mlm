<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

use DB, Validator, Redirect, Crypt;
use App\User, App\District;

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
      $users        =  User::whereStatus(1)->orderBy('name', 'DESC')->lists('name', 'id')->toArray();
      $districts    =  District::whereStatus(1)->orderBy('name', 'DESC')->lists('name', 'id')->toArray();
      return view('admin.users.add_user', compact('users', 'districts'));
    }

    public function storeUser(Request $request) {

        $validator = Validator::make($data = $request->all(), User::$rules);
        if ($validator->fails()) return Redirect::back()->withErrors($validator)->withInput();
    	  $message = '';

        //create username and password
        $data['username'] = $request->mobile;
        $data['password'] = bcrypt($request->mobile);

        if($request->placed_under != '') {
          $data['parent_id'] = $request->placed_under;
        }

        if(User::create($data)) {
          $message .= 'Customer added successfully !';
        }else{
            $message .= 'Unable to add Customer !';
        }

        return Redirect::route('admin.user.index')->with('message', $message);
    }

    public function viewUsers() {
      $users        =  User::whereStatus(1)->orderBy('name', 'DESC')->with(['district'])->paginate(50);
      foreach ($users as $key => $value) {
        //check if child exist
        $child = User::whereStatus(1)->where('parent_id', $value->id)->count();
        $users[$key]['child'] = $child;
      }
      return view('admin.users.view_users', compact('users'));
    }

    public function viewUsersInfo($id) {
      $info =  User::whereId($id)->with(['district', 'parent'])->first();
      $childs = User::where('parent_id', $id)->with(['district'])->get();
      return view('admin.users.view_user_info', compact('info', 'childs'));
    }

    public function editUser($id) {
      $user = User::findOrFail($id);

      $users        =  User::whereStatus(1)->orderBy('name', 'DESC')->lists('name', 'id')->toArray();
      $districts    =  District::whereStatus(1)->orderBy('name', 'DESC')->lists('name', 'id')->toArray();

      return view('admin.users.edit_user', compact('user', 'users', 'districts'));
    }

    public function updateUser(Request $request, $id) {
      $user = User::findOrFail($id);

      $user->fill($request->all());
      $message = '';
      if($user->save()) {
          $message .= 'User Updated Successfully !';
      }else{
          $message .= 'Unable to update  User !';
      }
      return Redirect::route('admin.user.info', $user->id)->with('message', $message);
    }
}
