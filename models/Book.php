<?php
namespace Models;
use \Illuminate\Database\Eloquent\Model as Eloquent;

class Book extends Eloquent
{
    public function user()
    {
        return $this->belongsTo('\Models\User');
    }
}