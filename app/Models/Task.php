<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'volume',
        'line',
        'deadline',
        'achivemnt',
        'post_id',
    ];
    
    public function post()
    {
        return $this->belongsTo(Task::class);
    }
    public function getByPost()
    {
        return $this::with('post')->orderBy('updated_at', 'DESC');
    }
}