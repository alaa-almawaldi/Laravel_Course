<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=['title','body'];//Determine which fields are allowed to be filled in (2")

    //or Determine the fields that are forbidden to be filled out:
    //protected $guarded=[];

    // setting if change in tables

//    if you want model understand its table add:
//    protected $table="table_name";

//    cancel timstamsp from table and delete from table:
//    public $timestamps = false;
    //create id
//    protected $primaryKey='post_id';
    //stop auto numbering
//    public $incrementing=false;

}
