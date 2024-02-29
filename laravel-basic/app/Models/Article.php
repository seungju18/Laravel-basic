<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        "body","user_id"
    ];
    public function user(){
        return $this->belongsTo(User::class); //User라는 클래스에 article이 간다
    }
}
