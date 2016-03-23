<?php
namespace Stock\Http\Controllers;
use Stock\Http\Requests\UserCreateRequest;
use Stock\Http\Requests\UserUpdateRequest;
use Stock\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use Illuminate\Http\Request;
use Stock\Http\Requests;
use Stock\User;
use Redirect;
use Session;
use DB;

class UsersController extends Controller
{
      public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin',['only' => ['create','edit']]);
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }
    public function find(Route $route){
        $this->user = User::find($route->getParameter('users'));
        $this->notFound($this->user);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // selecionando tabelas em especificos
      $users = DB::table('users')
      ->Where('activated','=',  1)
      ->paginate(10);

        return view('users.index',compact('users'));
    }
    public function inactive(){

        $users = DB::table('users')
      ->Where('activated','=',  0)
      ->paginate(10);

        return view('users.inactive',compact('users'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
              Session::flash('message','Usuario criado com sucesso');
              return Redirect::to('/users');
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
          return view('users.edit',['user'=>$user]);
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
        Session::flash('message','Usuario Atualizado Corretamente');
         return Redirect::to('/users');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

          User::destroy($id)->with('output','entrie')->forceDelete();
          Session::flash('message','Usuario excluido com sucesso');
          return Redirect::to('/users');
    }
}
