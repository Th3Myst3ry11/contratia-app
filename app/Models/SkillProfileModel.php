<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillProfileModel extends Model
{
    use HasFactory;
    protected $table = 'skills_profile';

    protected $primaryKey = 'id';

   

    public function profileModel(){
        return $this->belongsTo(profileModel::class,'user_fk');
    }
}
