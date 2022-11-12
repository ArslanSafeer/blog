<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $primaryKey = 'id';
    protected $fillable = ["file_path","projectdetails_id", "created_at", "updated_at"];
}
