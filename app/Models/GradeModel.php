<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeModel extends Model
{
    protected $table = "grades";

    protected $fillable = ["user_id","subject","grade","professor"];

}
