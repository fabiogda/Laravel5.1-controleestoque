<?php

namespace Estoque\Http\Controllers;

use Illuminate\Http\Request;

use Estoque\Http\Requests;
use Estoque\Http\Controllers\Controller;

class FrontController extends Controller
{
  public function __construct(){
 $this->middleware('auth',['only' => 'admin']);
}



  public function admin(){
        return view('admin.index');
   }
}
