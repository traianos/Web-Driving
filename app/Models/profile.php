<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;
    
    protected $fillable = ['FirstName', 'LastName', 'phone', 'afm', 'location', 'age'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'profile_user');
    }
   
    public function categories()
    {
        return $this->hasMany(Categories::class);
    }
}
