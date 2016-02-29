<?php

namespace Stock;

use Illuminate\Database\Eloquent\Model;

class Output extends Model
{
  protected $table = "outputs";
  protected $fillable = ['product_id','user_id','quantity'];

  public function product(){

    return $this->belongsTo('Stock\Product');

  }
  public function user(){

    return $this->belongsTo('Stock\User');

  }


}
