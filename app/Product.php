<?php

namespace Stock;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;



class Product extends Model
{
  protected $table = "products";
  protected $fillable = ['category_id','name','price','quantity','description','path','activated'];

  public function setPathAttribute($path){
    if (!empty($path)) {
      $name = Carbon::now()->second.$path->getClientOriginalName();
      $this->attributes['path'] = $name;
      \Storage::disk('local')->put($name,\File::get($path));
    }
  }

  public function outputs(){

    return $this->hasmany('Stock\Output');

  }

  public function entries(){

    return $this->hasmany('Stock\Entry');

  }
}
