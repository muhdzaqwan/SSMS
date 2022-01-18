<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $table = "chats";
    
    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function supervisor(){
        return $this->belongsTo(Supervisor::class);
    }

}
