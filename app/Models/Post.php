<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    //protected $table = 'posts';
    //protected $primaryKey = 'post_id';
    protected $date = ['deleted_at'];
    protected $fillable = [

        'title',
        'content'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}
