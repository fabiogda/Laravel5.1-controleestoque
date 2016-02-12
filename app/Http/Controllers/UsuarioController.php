<?php

namespace Estoque\Http\Controllers;

use Estoque\Http\Requests\UserCreateRequest;
use Estoque\Http\Requests\UserUpdateRequest;
use Estoque\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use Illuminate\Http\Request;
use Estoque\Http\Requests;
use Estoque\User;
use Redirect;
use session;
use DB;

class UsuarioController extends Controller
{

      public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin',['only' => ['create','edit']]);
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }
    public function find(Route $route){
        $this->user = User::find($route->getParameter('usuario'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::paginate(5);
      return view('usuario.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
              User::create($request->all());
              return Redirect::to('/usuario');
            }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
          $user = User::find($id);
        return view('usuario.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
          $user = User::find($id);
          $user->fill($request->all());
          $user->save();
        //  Session::flash('message','Usuario Atualizado Corretamente');
         return Redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          User::destroy($id);
          return Redirect::to('/usuario');
    }
}
