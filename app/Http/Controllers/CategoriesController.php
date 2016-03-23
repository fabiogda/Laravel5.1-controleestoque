<?php

namespace Stock\Http\Controllers;

use Illuminate\Http\Request;

use Stock\Http\Requests;
use Stock\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use Stock\User;
use Stock\Category;
use Redirect;
use Session;
use DB;

class CategoriesController extends Controller
{
        public function find(Route $route){
          $this->category = Category::find($route->getParameter('categories'));
            $this->notFound($this->category);
      }/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categorys = DB::table('categories')->where('activated', '=' , 1 )->paginate(5);
      return view('categories.index',compact('categorys'));
    }
    public function inactive()
  {

    $categorys = DB::table('categories')->where('activated', '=' , 0 )->paginate(5);
    return view('categories.inactive',compact('categorys'));

  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
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
      return Redirect::to('products/create');
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
      return view('categories.edit', ['category'=>$category]);
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
            $category->fill($request->all());
            $category->save();
            Session::flash('message','Categoria atualizada com sucesso');
            return  Redirect::to('/categories');
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
        return Redirect::to('/categories');
    }
}
