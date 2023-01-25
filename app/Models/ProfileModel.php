<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileModel extends Model
{
    use HasFactory;
    protected $table = 'profile';

    protected $primaryKey = 'id';

    protected $fillable =[
        'firstname',
        'lastname',
        'phone',
        'email',
        'rate',
        'currency',
        'city',
        'country'

    ];

    public function skillProfileModel(){
        $this->hasMany(SkillProfileModel::class);
    }
}
