<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'description', 'company', 'location', 'website', 'email', 'tags' ];

    public function scopeFilter($query, array $filters){
        if($filters['tag'] ?? false){
            $query->where('tags', 'like', '%'. $filters['tag'] . '%');
        }
        if($filters['search'] ?? false){
            $query->where('title', 'like', '%'. $filters['search'] . '%')
            ->orWhere('description', 'like', '%'. $filters['search'] . '%')
            ->orWhere('tags', 'like', '%'. $filters['search'] . '%')
            ->orWhere('location', 'like', '%'. $filters['search'] . '%')
            ->orWhere('company', 'like', '%'. $filters['search'] . '%');
        }
    }

    //Relationship to User
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
