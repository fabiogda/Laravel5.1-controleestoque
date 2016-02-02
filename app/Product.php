<?php

namespace Estoque;

use Illuminate\Database\Eloquent\Model;
use DB;

class product extends Model
{
    protected $table = "products";
    protected $fillable = ['name','price','quantity','description'];
}
