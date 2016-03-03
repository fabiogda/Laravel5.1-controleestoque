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

  public function entrielist(){

    $entries = Entry::with('product','user')->paginate(5);
    return view('entries.entrielist',compact('entries'));

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
    $item = $request->all();
    $item['user_id'] = Auth::user()->id;
      if (Entry::create($item)) {
      Product::find($item['product_id'])->increment('quantity',$item['quantity']);

      /***********************************************************************************
      *   Product::find($item['products_id'])->increment('quantity',$item['quantity']);
      * -------------------------------------------------------------------------------------
      *   Selecionando coluna especifica para update da mesma colando acima realiza o mesmo procedimento
      *
      *   $quantity = Product::where('id',$item['products_id'])->pluck('quantity');
      *   $quantity += $item['quantity'];
      *     Product::where('id',$item['products_id'])->update(['quantity'=> $quantity]);
      *  $product['quantity'] += $item['quantity'];
      *  $product->save();
      */
          Session::flash('message','Item inserido com sucesso');
          return Redirect::to('entries');
    }



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
  public function destroy(Request $request , $id)
  {
      Entry::destroy($id);
      Session::flash('message','Entrada de item excluido com sucesso');
      return Redirect::to('/entrielist');


  }
}
