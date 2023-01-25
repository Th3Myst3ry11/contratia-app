<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobModel extends Model
{
    use HasFactory;

    protected $table = 'job';

    protected $primaryKey = 'id';

    protected $fillable =[
        'email',
        'phone',
        'country',
        'city'
    ];

    public function skillJobModel(){
        $this->hasMany(SkillJobModel::class);
    }
    
}
