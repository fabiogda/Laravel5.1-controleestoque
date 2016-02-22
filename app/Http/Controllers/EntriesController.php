<?php

namespace Estoque\Http\Controllers;

use Illuminate\Http\Request;

use Estoque\Http\Requests;
use Estoque\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use Estoque\User;
use Estoque\Product;
use Estoque\Entries;
use Redirect;
use Session;
use DB;
use Auth;

class EntriesController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {

    $products = Product::paginate(5);
    return view('entries.index',compact('products'));

  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $product = Product::lists('name','id');
    return view('entries.create',compact('product'));
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $product = $request->all();
    $product['users_id'] = Auth::user()->id;
    if (Entries::create($product)) {
      $quantity = Product::find($product['products_id'])->get(['quantity']);
      print_r($quantity);
      //$quantity += $product['quantity'];
    //  Product::where('id',$product['products_id'])
    //  ->update(['quantity' => $quantity]);
    }
  //  return Redirect::to('/entries');

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
