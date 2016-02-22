<?php
namespace Estoque\Http\Controllers;

use Estoque\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use Illuminate\Http\Request;
use Estoque\Http\Requests;
use Redirect;
use Session;
use Estoque\Product;
use Estoque\Entries;
use Estoque\Category;

class ProductController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
    $this->middleware('admin');
    $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
  }
      public function find(Route $route){
          $this->product = Product::find($route->getParameter('product'));
            $this->notFound($this->product);
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function index()
    {
        $products = Product::paginate(5);
        return view('product.index',compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $category = Category::lists('name','id');
      return view('product.create',compact('category'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Product::create($request->all());
       Session::flash('message','Produto criado com sucesso');
       return Redirect::to('/product');
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
        $product = Product::find($id);
        return view('product.edit', ['product'=>$product]);
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
        $product = Product::find($id);
        $product->fill($request->all());
        $product->save();
        Session::flash('message','Produto atualizado com sucesso');
        return Redirect::to('/product');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        Session::flash('message','Produto excluido com sucesso');
        return Redirect::to('/product');
    }
}
