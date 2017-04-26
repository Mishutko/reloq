<?php
namespace Models;
use \Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    public function books()
    {
        return $this->hasMany('\Models\Book');
    }
}