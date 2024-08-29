<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

class Task extends Model
{
    use HasFactory;
    protected $fillable =['name','priority_id'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function priority(){
        return $this->belongsTo(Priority::class);
    }
}

