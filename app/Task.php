<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable =['title', 'body'];#반대는 guarded가 있다.
}
