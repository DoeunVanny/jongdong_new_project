<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logos_Footers extends Model
{
    protected $table = 'logos__footers';
    protected $primaryKey = 'id';
     protected $fillable = [
          'type',
          'image',
      ];
    use HasFactory;
}
