<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\listTypes as listTypeModel;

class ListElements extends Model
{
    use HasFactory;

    protected $table = "list_elements";

    protected $fillable = [
      'name',
      'list_types_id'
    ];

    public function listTypes()
    {
        return $this->belongsTo(listTypeModel::class);
    }
}
