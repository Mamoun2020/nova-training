<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;

 protected $casts =[
'publish_at'=> 'datetime',
'publish_until'=> 'datetime',
 ];
 public function user(){
     return $this->belongsTo(User::Class);
 }
 public function tags(){
     return $this->belongsToMany(Tag::Class);
    }
}
