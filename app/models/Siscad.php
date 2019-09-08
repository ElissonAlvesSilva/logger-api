<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siscad extends Model
{
  protected $table = 'siscad';

  protected $fillable = [
	  'method',
	  'status_code',
	  'description',
  ];
}
