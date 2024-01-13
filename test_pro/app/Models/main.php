<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class main extends Model
{
    use HasFactory;
    
	protected $table = 'employee_data';
	protected $fillable = ['Id','name', 'email','age', 'gender', 'department', 'designation'];

    public $timestamps = false;
}
