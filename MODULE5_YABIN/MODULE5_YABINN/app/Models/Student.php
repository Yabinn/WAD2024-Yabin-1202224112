<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Define the table name if it's not the plural of the model name
    protected $table = 'students'; 

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'nim',
        'student_name',
        'email',
        'major',
        'dosen_id', // foreign key
    ];

    // Define the relationship with lecturer (One-to-Many inverse)
    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class, 'dosen_id'); // 'dosen_id' is the foreign key
    }
}
