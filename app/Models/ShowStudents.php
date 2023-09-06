<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowStudents extends Model
{
    use HasFactory;
    protected $table = "students";
    protected $fillable = [
        'id', 'first_name', 'last_name', 'phone_number', 'degree', 'address', 'grade', 'moeny'
    ];
}
