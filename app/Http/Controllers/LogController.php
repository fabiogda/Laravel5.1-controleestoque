<?php

namespace Estoque\Http\Controllers;

use Illuminate\Http\Request;
use Estoque\Http\Requests;
use Estoque\Http\Requests\LoginRequest;
use Auth;
use Session;
use Redirect;
use Estoque\Http\Controllers\Controller;

class LogController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    return View('login');
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    if(Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])){
      return Redirect::to('admin');
    }
        return Redirect::to('/log');
  }
  public function logout(){
    Auth::logout();
    return Redirect::to('/log');
  }


/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
  //
}

/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
  //
}

/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
  //
}

/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{
  //
}
}