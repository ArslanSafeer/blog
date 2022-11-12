<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projectdetail extends Model
{
    protected $primaryKey = 'projectdetails_id';

    public function project()
    {

        return $this->hasMany('App\project');
    }

    public function projectdetail() {
        return $this->belongsTo(Project::class, 'projects_id');
    }
}
