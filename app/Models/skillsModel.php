<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skillsModel extends Model
{
    use HasFactory;
    protected $table = 'skills';

    protected $primaryKey = 'id';
}
