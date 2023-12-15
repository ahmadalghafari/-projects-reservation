<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instructor extends Model
{
    use HasFactory;
    protected $fillable = ['id' ,'user_id' , 'first_name' ,'last_name' ,'address' ,'birth_date' ,'gender' ,'grade' ,'section'];

}
