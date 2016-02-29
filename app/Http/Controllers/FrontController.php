<?php

namespace Stock\Http\Controllers;

use Illuminate\Http\Request;

use Stock\Http\Requests;
use Stock\Http\Controllers\Controller;

class FrontController extends Controller
{
  public function __construct(){
 $this->middleware('auth',['only' => 'admin']);
}



  public function admin(){
        return view('admin.index');
   }
}
