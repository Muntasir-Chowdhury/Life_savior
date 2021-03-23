<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;
class Posts extends Model
{
    use HasFactory;
    protected $table = "posts";
    public $timestamps = true;

    protected $fillable = [
	'user_id',	'bld_grp', 'description', 'location' , 'date'
    ];  
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
