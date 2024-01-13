<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AGQuestions extends Model
{
    use HasFactory;
    protected $table = 'AGQuestions';
    protected $fillable = ['question','TrueAnswer','FalseAnswer1','FalseAsnwer2','FalseAnswer3','updated_at','created_at'];
}
