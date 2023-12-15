<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class project extends Model
{
    use HasFactory;
    protected $fillable = ['name' ,'created_by', 'reserved_by' , 'section' , 'id'];

    public function owner() : BelongsTo {
        return $this->belongsTo(User::class , 'reserved_by' , 'id');
    }

    public function maker() : BelongsTo{
        return $this->belongsTo(User::class , 'created_by' , 'id');
    }

}
