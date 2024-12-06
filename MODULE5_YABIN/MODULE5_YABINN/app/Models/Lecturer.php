<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

    // Define the table name if it's not the plural of the model name
    protected $table = 'lecturers'; 

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'lecturer_code',
        'lecturer_name',
        'nip',
        'email',
        'telephone_number',
    ];

    // Define the relationship with students
    public function students()
    {
        return $this->hasMany(Student::class, 'dosen_id'); // 'dosen_id' is the foreign key in students table
    }
}
