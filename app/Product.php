<?php

namespace Estoque;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;


class product extends Model
{
    protected $table = "products";
    protected $fillable = ['category_id','name','price','quantity','description','path'];

    public function setPathAttribute($path){
      if (!empty($path)) {
        $name = Carbon::now()->second.$path->getClientOriginalName();
  			$this->attributes['path'] = $name;
  			\Storage::disk('local')->put($name, \File::get($path));
        }
    }
}
