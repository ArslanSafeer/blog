<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projectuser extends Model
{
    protected $primaryKey = 'projectusers_id';


    public function project()
    {
     return $this->belongsTo('App\project');

    }
    public function projectuser() {
     return $this->belongsTo(Project::class, 'projects_id');
    }
}
