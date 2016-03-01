<?php

namespace Stock\Http\Controllers;

use Illuminate\Http\Request;

use Stock\Http\Requests;
use Stock\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use Stock\User;
use Stock\Product;
use Stock\Entry;
use Stock\Output;
use Stock\Category;
use Redirect;
use Session;
use DB;
use Auth;

class OutputsController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {

    $outputs = Output::with('product','user')->paginate(5);
    return view('outputs.index',compact('outputs'));

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

    $sale = $request->all();
    $sale['user_id'] = Auth::user()->id;
    if (Output::create($sale)) {
      Product::find($sale['product_id'])->decrement('quantity',$sale['quantity']);
      Session::flash('message','Venda concluida');
      return Redirect::to('outputs');
    }
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show()
  {

  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    return view('outputs.edit',['product'=> Product::findOrFail($id)]);
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
