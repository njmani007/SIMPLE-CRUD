<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';

    protected $fillable = [
        'student_id',
        'class',
        'name',
        'gender',
        'dob',
        'father_name',
        'contact_number',
        'mother_name',
        'address_line1',
        'address_line2',
        'city',
    ];

    protected $casts = [
    'dob' => 'date',
];


}
