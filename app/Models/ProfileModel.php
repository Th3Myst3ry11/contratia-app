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
        'country',
        'description',
        'user_fk'

    ];

    public function skillProfileModel(){
        return $this->hasMany(SkillProfileModel::class);
    }
}
