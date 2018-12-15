<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model{
    protected $table = 'todos'; // sync model and table
    protected $primaryKey = 'id'; // sync prime key and id
    public $timestamps = false; // disable timestamp
    
}
