<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $table = 'categories';
    protected $fillable = [
        'id','name','url_key','description','image','parent_id'
    ];
    public function products(){
        return $this->hasMany(Product::class,'category','id');
    }
}
