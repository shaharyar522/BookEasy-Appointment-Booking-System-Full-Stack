<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\slug;

class Post extends Model
{
    use slug; 
}
