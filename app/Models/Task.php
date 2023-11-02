<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    
    //Don't add Password or other sensitive information to fillable properties
    protected $fillable = ['title', 'description', 'long_description'];
    
    public function toggleComplete() {
        $this->completed = !$this->completed;
        $this->save();
    }
}
