<?php

namespace Estoque\Http\Controllers;

use Illuminate\Http\Request;

use Estoque\Http\Requests;
use Estoque\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use Estoque\User;
use Estoque\Category;
use Redirect;
use Session;
use DB;

class CategoryController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
    $this->middleware('admin');
    $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
  }
      public function find(Route $route){
          $this->category = Category::find($route->getParameter('category'));
            $this->notFound($this->category);
      }/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $category = Category::paginate(10);
      return view('category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Category::create($request->all());
      Session::flash('message','Categoria criada com sucesso');
      return Redirect::to('/category');
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
      $category = Category::find($id);
      return view('category.edit', ['category'=>$category]);
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
            $category = Category::find($id);
            $category = filll($Request->all());
            $category->save();
            Session::flash('message','Categoria atualizada com sucesso');
            return  Redirect::to('/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        Session::flash('message','Categoria excluida com sucesso');
        return Redirect::to('/category');
    }
}
