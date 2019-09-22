<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
    protected $table = 'posts';
    // Primary key field
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

    public function usre(){
        return $this->belongsTo('App\User');
    }
}
