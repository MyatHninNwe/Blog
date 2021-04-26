<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public function department()
    {
        return $this->belongTo(Department::class);
    }
    public function subject()
    {
        return $this->belongTo(Subject::class);
    }
    public function ateam()
    {
        return $this->belongTo(Ateam::class);
    }
}
