<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $table = "applications";

    protected $fillable = [
        'student_id',
        'supervisor_id',
        'title',
        'field',
        'description',
        'proposaldoc',
        'role',
        'matricnumber',
        'status',
    ];
    public function student(){
        return $this->belongsToMany(Student::class);
    }

    public function supervisor(){
        return $this->belongsToMany(Supervisor::class);
    }
}
