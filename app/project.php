<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class project extends Model
{
    protected $primaryKey = 'projects_id';

     public function projectuser()
    {

       return $this->hasMany('App\projectuser');
    }

     public function projectdetail()
    {
     return $this->belongsTo('App\projectdetail');

    }

    public function project_parent() 
    {
    	return $this->belongsTo(Project::class, 'projects_id');
    }

     public function project() 
     {
        return $this->belongsTo(ProjectUser::class, 'projects_id', 'projectusers_id');
    }
    
}
