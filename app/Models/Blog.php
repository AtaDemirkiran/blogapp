<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table='blogs';

    protected $fillable=[
        'title',
        'category_id',
        'slug',
        'picture',
        'description'

    ];

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

}
