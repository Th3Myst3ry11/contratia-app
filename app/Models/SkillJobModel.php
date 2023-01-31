<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillJobModel extends Model
{
    use HasFactory;
    protected $table = 'skills_job';

    protected $primaryKey = 'id';

    

    public function jobModel(){
       return $this->belongsTo(JobModel::class,'job_fk');
    }
}
