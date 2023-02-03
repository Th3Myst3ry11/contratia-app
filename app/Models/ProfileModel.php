<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileModel extends Model
{
    use HasFactory;
    protected $table = 'profile';

    protected $primaryKey = 'id';

    protected $casts = [
        'skill' => 'array'
    ];

    protected $fillable =[
        'firstname',
        'lastname',
        
        'email',
        'rate',
        'title',
        'currency',
        'city',
        'skill',
        'file_path',
        'country',
        'description',
        'user_fk'

    ];

    public function skillProfileModel(){
        return $this->hasMany(SkillProfileModel::class,'profile_fk');
    }
    public function user(){
       return $this->belongsTo(User::class,'user_fk');// foreign key , local key of the parent class
        /**So, in this case, Eloquent assumes that the Prpfile model has a user_id column.
         However, if the foreign key on the Profile model is not user_id, you may pass a custom key name as the second argument to the belongsTo method */
    }
}
