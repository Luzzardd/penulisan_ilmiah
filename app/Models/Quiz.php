<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $table ='quis';
    protected $fillable=[
        'category_id',
        'soal',
        'jawaban',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }

}
