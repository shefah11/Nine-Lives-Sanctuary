<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    use HasFactory;

    protected $table = 'adoptions';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'cat_id',
        'status', 
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

   
    public function cat()
    {
        return $this->belongsTo(Cat::class, 'cat_id');
    }
}
