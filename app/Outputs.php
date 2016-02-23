<?php

namespace Estoque;

use Illuminate\Database\Eloquent\Model;

class Outputs extends Model
{
  protected $table = "outputs";
  protected $fillable = ['products_id','users_id','quantity','total_price'];
}
