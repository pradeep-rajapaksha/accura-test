<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use HasFactory, SoftDeletes;
    
    /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
    protected $fillable = [
        'firstname',
        'lastname',
        'dob',
        'summery',
        'ds_division_id',
        'email',
    ];
    
    /**
    * Get the attributes that should be cast.
    *
    * @return array<string, string>
    */
    protected function casts(): array
    {
        return [
            'dob' => 'datetime:Y-m-d',
        ];
    }
    
    public function dsDivision()
    {
        return $this->belongsTo(DsDivision::class);
    }
}
