<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';
     protected $fillable = [
           'type',
          'title',
          'title_detail',
          'image',
          'description',
          'image_detail',
      ];
    use HasFactory;
}
