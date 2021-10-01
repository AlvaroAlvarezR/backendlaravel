<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\listElements;

class ThirdParties extends Model
{
    use HasFactory;

    protected $fillable = [
      'name1',
      'name2',
      'lastname1',
      'lastname2',
      'id_type_id',
      'third_type_id',
      'municipality_id',
      'department_id',
      'taxpayer_type_id'
    ];

    public function idType()
    {
      return $this->belongsTo(listElements::class);
    }

    public function thirdType()
    {
      return $this->belongsTo(listElements::class);
    }

    public function municipalityType()
    {
      return $this->belongsTo(listElements::class);
    }

    public function departmentType()
    {
      return $this->belongsTo(listElements::class);
    }

    public function taxpayerType()
    {
      return $this->hasOne(listElements::class);
    }
}
