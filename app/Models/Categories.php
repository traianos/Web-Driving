<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','name','start_date','end_date'
    ];
    
    public function users()
    {
        return $this->belongsToMany(User::class, 'categories_user')
                    ->withPivot('start', 'end')
                    ->withTimestamps();
        return $this->belongsToMany(User::class)->withPivot('start', 'end');   
    }

}
