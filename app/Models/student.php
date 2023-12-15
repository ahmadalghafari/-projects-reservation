<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class student extends Model
{
    use HasFactory;
    protected $fillable =[ 'id' ,'user_id' ,'first_name' ,'last_name' ,'birth_date' ,'gender' ,'address' ,'academic_year' ,'section'];



}
