<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScopeModel extends Model
{
    use HasFactory;
    protected $table="registrationform";
    protected $fillable=['firstname','lastname','gender','date_of_birth',
    'email','phonenumber','country','country','state','city','hobbies','avatar','userid'];
}
