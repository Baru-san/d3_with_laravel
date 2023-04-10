<?php
 
 namespace App\Models;
  
 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;
  
 class Subjects extends Model
 {
     use HasFactory;
  
     /**
      * 
      * Satu mata kuliah memiliki banyak user
      * relasi many to one
      */
     public function user(){
         return $this->belongsToMany(User::class);
     }
 }
  