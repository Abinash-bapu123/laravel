<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\UserModel;

class UserController extends Controller
{
    public function UserDetails()
    {
    	// return view('page');
    	$dbaccess = UserModel::select('*')->get();
    	print_r($dbaccess);
    }

    public function InsertDetails()
    {
    	$insertVar = new UserModel([
    		'user_id' => 'abin123',
    		'password' => '34432'
    	]);

    	$insertVar->save();
    }
}
