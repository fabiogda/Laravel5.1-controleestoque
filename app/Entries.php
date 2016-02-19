<?php

namespace Estoque;

use Illuminate\Database\Eloquent\Model;

class Entries extends Model
{
  protected $table = "entries";
  protected $fillable = ['products_id','users_id','quantity'];

}
