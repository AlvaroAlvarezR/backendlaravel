<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListTypes extends Model
{
    use HasFactory;

    protected $table = "list_types";

    protected $fillable = [
      'name'
    ];
}
