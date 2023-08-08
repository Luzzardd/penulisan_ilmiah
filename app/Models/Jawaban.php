<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;
    protected $table ='jawabans';
    protected $fillable=[
    'user_id',
    'kuis',
    'total'
    ];

    public function Users(){
        return $this->belongsTo(User::class);
    }
}
